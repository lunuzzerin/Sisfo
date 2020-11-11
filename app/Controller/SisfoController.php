<?php
include_once('../Config/database.php');

class SisfoController extends AppController {

    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index() {

        //$this->set('sisfo', $this->sisfo->find('all'));
    }

}