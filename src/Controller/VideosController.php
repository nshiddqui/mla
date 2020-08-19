<?php

namespace App\Controller;

use App\Controller\AppController;
use DataTables\Controller\DataTablesAjaxRequestTrait;
use Cake\Http\Exception\UnauthorizedException;

/**
 * Videos Controller
 *
 * @property \App\Model\Table\VideosTable $Videos
 *
 * @method \App\Model\Entity\Video[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VideosController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('DataTables.DataTables');
        $this->DataTables->createConfig('Videos')
                ->databaseColumn('Videos.id')
                ->column('Videos.title', ['label' => 'Title'])
                ->column('Videos.subject', ['label' => 'Subject'])
                ->column('actions', ['label' => 'Actions', 'database' => false]);
        $this->loadModel('Dropdowns');
        $this->set('subjects', $this->Dropdowns->subjects());
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
        $this->DataTables->setViewVars('Videos');
    }

    /**
     * View method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $video = $this->Videos->get($id, [
            'contain' => [],
        ]);

        $this->set('video', $video);
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
        $video = $this->Videos->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $files = $this->request->getUploadedFile('video');
            $fileName = time() . $files->getClientFileName();
            if (file_exists(WWW_ROOT . 'videos' . DS . $fileName)) {
                unlink(WWW_ROOT . 'videos' . DS . $fileName);
            }
            $files->moveTo(WWW_ROOT . 'videos' . DS . $fileName);
            $data['video'] = $fileName;
            $video = $this->Videos->patchEntity($video, $data);
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $this->set(compact('video'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $video = $this->Videos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $files = $this->request->getUploadedFile('video');
            if ($files) {
                $fileName = time() . $files->getClientFileName();
                if (file_exists(WWW_ROOT . 'videos' . DS . $fileName)) {
                    unlink(WWW_ROOT . 'videos' . DS . $fileName);
                }
                $files->moveTo(WWW_ROOT . 'videos' . DS . $fileName);
                $data['video'] = $fileName;
            } else {
                if (isset($data['video'])) {
                    unset($data['video']);
                }
            }
            $video = $this->Videos->patchEntity($video, $data);
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $this->set(compact('video'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        if ($this->Auth->user('role') != '1') {
            throw new UnauthorizedException(__('You are not alowed to access this page'));
        }
        $this->request->allowMethod(['post', 'delete']);
        $video = $this->Videos->get($id);
        if ($this->Videos->delete($video)) {
            $this->Flash->success(__('The video has been deleted.'));
        } else {
            $this->Flash->error(__('The video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function play($id = null) {
        $video = $this->Videos->get($id, [
            'contain' => [],
        ]);
        $boxDisabled = true;
        $this->set(compact('video', 'boxDisabled'));
    }

}
