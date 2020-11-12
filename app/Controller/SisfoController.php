<?php

App::uses('AppController', 'Controller');

class SisfoController extends AppController {

    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    
    public $uses = array ('User');


    public function index() {

        $this->set('users', $this->User->find('list'));

        /*if ($this->request->is('post')) {
            if ($this->change_control->save($this->request->data)) {
                $this->Flash->success('Tu post fue guardado satisfactoriamente.');
                $this->redirect(array('action' => 'index'));
            }
        }*/

        if ($this->request->is('post')) {
            $this->loadModel('change_control');
            $this->change_control->create();
            if ($this->change_control->save($this->request->data)) {
                $this->change_control->save(array());
                $this->Flash->success('Tu post fue guardado satisfactoriamente.');
            }
        }
    }
}