<?php

App::uses('AppController', 'Controller');

class SisfoController extends AppController {

    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    
    //Se llaman los medelos que se van a utilizar. Como esta nombrado el modelo.
    public $uses = array ('User','ChangeControl');


    public function index() {

        $this->set('users', $this->User->find('list'));

        if ($this->request->is('post')) {
            $this->ChangeControl->create();
            
            //Validamos si se ingresa Si=0 en scope y que se haya ingresado el formulario
            if($this->request->data['change_control']['scope']== '0' && empty($this->request->data['change_control']['scope_description'])){
                $this->Flash->error('Recuerde llenar la descripción del alcance del proyecto');
                return false;
            }

            //Validamos si se ingresa Si=0 en schedule y que se haya ingresado el formulario
            if($this->request->data['change_control']['schedule']== '0' && empty($this->request->data['change_control']['schedule_description'])){
                $this->Flash->error('Recuerde llenar la descripción del cronogroma del proyecto');
                return false;
            }

            //Validamos si la respuesta es Si=0 para los archivos adjuntos y verificamos que se haya subido un archivo.
            if($this->request->data['change_control']['adjunt']== '0' && empty($this->request->data['change_control']['adjunt_file'])){
                $this->Flash->error('Recuerde subir el archivo adjunto');
                return false;
            }

            //Que se haya ingresado el nombre del proyecto
            if(empty($this->request->data['change_control']['product'])){
                $this->Flash->error('Por favor, ingrese el proyecto del que solicita el cambio.');
                return false;
            }
            
            //Verificamos que se haya seleccionado quién solicito el cambio
            if(empty($this->request->data['change_control']['user_id'])){
                $this->Flash->error('Por favor, ingrese quién solicita el cambio.');
                return false;
            }
            
            //Verificamos que se haya seleccionado el motivo del cambio
            if(empty($this->request->data['change_control']['reason'])){
                $this->Flash->error('Por favor, ingrese el motivo solicita el cambio.');
                return false;
            }
            
            //Verificamos que se haya seleccionado el motivo del cambio
            if(empty($this->request->data['change_control']['process'])){
                $this->Flash->error('Por favor, ingrese el proceso asociado al cambio.');
                return false;
            }

            var_dump($this->request->data);
            exit();

            if ($this->ChangeControl->save($this->request->data)) {
                $this->Flash->success('Los datos fueron guardados de manera correcta');
            } else {
                $this->Flash->error('Los datos NO fueron guardados de manera correcta');
            }
        }
    }
}