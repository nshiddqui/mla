<?php

namespace App\Controller;

use App\Controller\AppController;
use DataTables\Controller\DataTablesAjaxRequestTrait;
use Cake\Http\Exception\UnauthorizedException;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        $this->Auth->allow(['logout', 'forgot', 'login']);
        parent::beforeFilter($event);
    }

    public function initialize() {
        parent::initialize();
        $this->loadComponent('DataTables.DataTables');
        $this->DataTables->createConfig('Users')
                ->databaseColumn('Users.id')
                ->queryOptions([
                    'conditions' => [
                        'Users.role' => '2'
                    ]
                ])
                ->column('Users.name', ['label' => 'Student Name'])
                ->column('Users.email', ['label' => 'Email ID'])
                ->column('Users.date_of_birth', ['label' => 'Date of Birth'])
                ->column('Users.course', ['label' => 'Course'])
                ->column('Users.address', ['label' => 'Address'])
                ->column('Users.status', ['label' => 'Status'])
                ->column('actions', ['label' => 'Actions', 'database' => false]);
        $this->loadModel('Dropdowns');
        $this->set('findstatus', $this->Dropdowns->findstatus());
        $this->set('courses', $this->Dropdowns->courses());
    }

    /*
     * User DataTable Ajax Request Trait
     */
    use DataTablesAjaxRequestTrait;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $this->DataTables->setViewVars('Users');
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            if (empty($data['password'])) {
                unset($data['password']);
            }
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login() {
        $this->viewBuilder()->setLayout(false);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                if ($user['status'] === true) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Flash->error(__('This user not activated, please contact our administrator.'));
                }
            } else {
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function active($id, $code) {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $this->request->allowMethod(['post']);
        $this->loadModel('Users');
        $users = $this->Users->get($id);
        $users->status = $code;
        if ($this->Users->save($users)) {
            $this->Flash->success(__('The user has been ' . ($code == '1' ? 'Activate' : 'Deactivated') . '.'));
        } else {
            $this->Flash->error(__('The user could not be  ' . ($code == '1' ? 'Activate' : 'Deactivated') . '. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
