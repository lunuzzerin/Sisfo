<?php

App::uses('AppController', 'Controller');

class SisfoController extends AppController {

    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    
    //Se llaman los modelos que se van a utilizar. Como esta nombrado el modelo.
    public $uses = array ('User','ChangeControl','Answer','Reason');


    public function index() {

        //Realizamos la consulta para revisar los datos que tenemos registrados en la tabla User.
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

            //Después de verificar los datos procedemos a guardarlos en la base de datos.
            if ($this->ChangeControl->save($this->request->data['change_control'])) {
                $this->Flash->success('Los datos fueron guardados de manera correcta');
            } else {
                $this->Flash->error('Los datos NO fueron guardados de manera correcta');
            }
        }
    }

    public function view() {
        $this->set('users', $this->User->find('list'));
        //Realizamos la búsqueda de los datos en la tabla ChangeControl
        $this->set('changeControls', $this->ChangeControl->find('all'));
    }

    public function complete($id) {

        //Realizamos la busqueda por el id
        $this->set('changeControls', $this->ChangeControl->findById($id));

        //Realizamos la consulta para revisar los datos que tenemos registrados en la tabla User.
        $this->set('users', $this->User->find('list'));        
    }
    
    public function pdf($id) {

        //Realizamos la busqueda por el id
        $this->set('changeControls', $this->ChangeControl->findById($id));

        $this->set('users', $this->User->find('list'));
        $this->set('reasons', $this->Reason->find('list'));
        $this->set('answers', $this->Answer->find('list'));

        //fpdf
        App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));
        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->set('fpdf', new FPDF('P','mm','A4'));
        $this->set('data', 'Hello, PDF world');
        $this->render('pdf');
	}
}