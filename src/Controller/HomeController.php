<?php

namespace App\Controller;

class HomeController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        $this->Auth->allow(['index']);
        parent::beforeFilter($event);
    }

    public function index() {
        $this->viewBuilder()->setLayout(false);
    }

}
