<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'Arquivos');

/**
 * Histologia3s Controller
 *
 * @property Histologia3 $Histologia3
 * @property PaginatorComponent $Paginator
 */
class Histologia3sController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 * Powered by Frame2Days
 * @return void
 */


public function salvar($Id, $Nome, $Tipo, $QuantidadeBlocos, $QuantidadeLaminas, $Inclusao, $Corte, $Etiquetagem){
		$this->Histologia3->create();
		
		$this->request->data['Histologia3']['Id'] = $Id;
		$this->request->data['Histologia3']['Nome_Paciente'] = $Nome;		
		$this->request->data['Histologia3']['Tipo'] = $Tipo;		
		$this->request->data['Histologia3']['Numero_Blocos'] = $QuantidadeBlocos;		
		$this->request->data['Histologia3']['Numero_Laminas'] = $Quantidade_Laminas;
		$this->request->data['Histologi3']['Inclusao'] = $Inclusao;
		$this->request->data['Histologia3']['Corte'] = $Corte;
		$this->request->data['Histologi3']['Etiquetagem'] = $Etiquetagem;
	
		$this->request->data['Histologia3']['Descartado'] = 'N';
		$this->request->data['Histologia3']['Removed'] = 'N';
		$this->Histologia3->save($this->request->data);
	}




	public function index() {
	    $conditions = array();
        
        if(($this->request->is('post') || $this->request->is('put')) && isset($this->data['Filter'])){
            $filter_url['controller'] = $this->request->params['controller'];
            $filter_url['action'] = $this->request->params['action'];
            $filter_url['page'] = 1;

            foreach($this->data['Filter'] as $name => $value){
                if($value){
                   $filter_url[$name] = urlencode(urlencode($value));
                }
            }   
            return $this->redirect($filter_url);
        }else {
            foreach($this->params['named'] as $param_name => $value){
               
                if(!in_array($param_name, array('page','sort','direction','limit'))){
                        if (strripos($param_name, '_id') === false) {
                        $conditions['Histologia3.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Histologia3.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Histologia3->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Histologia3.removed' => 'N');
		$this->set('histologia3s', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Histologia3->exists($id)) {
			throw new NotFoundException(__('Invalid histologia3'));
		}
		$options = array('conditions' => array('Histologia3.' . $this->Histologia3->primaryKey => $id));
		$this->set('histologia3', $this->Histologia3->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Histologia3->create();
			     $Created = new DateTime($this->request->data['Histologia3']['Created']);
                 $this->request->data['Histologia3']['Created'] = $Created->format('Y-m-d H:i');
                                 $Modified = new DateTime($this->request->data['Histologia3']['Modified']);
                 $this->request->data['Histologia3']['Modified'] = $Modified->format('Y-m-d H:i');
                            		     if ($this->Histologia3->save($this->request->data)) {
                                                                $this->Flash->success(__('histologia3').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('histologia3').' '.__('could not be saved. Please, try again.'));
                        			}
		}
	}

/**
 * edit method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	$Arquivos = new ArquivosController();
		if (!$this->Histologia3->exists($id)) {
			throw new NotFoundException(__('Invalid histologia3'));
		}
		if ($this->request->is(array('post', 'put'))) {
		    $Created = new DateTime($this->request->data['Histologia3']['Created']);
            $this->request->data['Histologia3']['Created'] = $Created->format('Y-m-d H:i');
            $Modified = new DateTime($this->request->data['Histologia3']['Modified']);
            $this->request->data['Histologia3']['Modified'] = $Modified->format('Y-m-d H:i');
           	$this->request->data['Histologia3']['Removed']='S';
             	if ($this->Histologia3->save($this->request->data)) {
               		//$Arquivos->salvar($id, $this->request->data['Histologia3']['Nome_Paciente']);


                    $this->Flash->success(__('histologia3').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Flash->error(__('histologia3').' '.__('could not be edited. Please, try again.'));
                }
		} else {
			$options = array('conditions' => array('Histologia3.' . $this->Histologia3->primaryKey => $id));
			$this->request->data = $this->Histologia3->find('first', $options);
		}
	 	$Created = new DateTime($this->request->data['Histologia3']['Created']);
 		$this->request->data['Histologia3']['Created'] = $Created->format('d-m-Y H:i');
 		$Modified = new DateTime($this->request->data['Histologia3']['Modified']);
 		$this->request->data['Histologia3']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Histologia3->id = $id;
		if (!$this->Histologia3->exists()) {
			throw new NotFoundException(__('Invalid histologia3'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Histologia3->save($data)) {
            $this->Flash->success(__('histologia3').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('histologia3').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
