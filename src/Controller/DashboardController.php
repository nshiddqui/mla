<?php

namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController {

    public function index() {
        $boxDisabled = true;
        $this->set(compact('boxDisabled'));
    }

}
