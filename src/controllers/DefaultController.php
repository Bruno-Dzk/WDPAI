<?php

require_once 'AppController.php';
require_once __DIR__ . '/../shared/Shared.php';

class DefaultController extends AppController {

    public function index() {

        $this->render('login');
    }
    
    private function renderSecure($name){
        session_start();
        Shared::checkSession();
        $this->render($name);
    }

    public function main() {
        renderSecure('main');
    }


    public function boat() {
        session_start();
        Shared::checkSession();
        $this->render('boat');
    }

    public function naped() {
        session_start();
        Shared::checkSession();
        $this->render('naped');
    }

    public function kotwice() {
        session_start();
        Shared::checkSession();
        $this->render('kotwice');
    }





}
