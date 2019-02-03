<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'Histologia3s');

/**
 * Histologia2s Controller
 *
 * @property Histologia2 $Histologia2
 * @property PaginatorComponent $Paginator
 */
class Histologia2sController extends AppController {

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




public function salvar($Id, $Nome, $Tipo, $QuantidadeBlocos, $QuantidadeLaminas, $Inclusao){
		$this->Histologia2->create();
		
		$this->request->data['Histologia2']['Id'] = $Id;
		$this->request->data['Histologia2']['Nome_Paciente'] = $Nome;		
		$this->request->data['Histologia2']['Tipo'] = $Tipo;		
		$this->request->data['Histologia2']['Numero_Blocos'] = $QuantidadeBlocos;		
		$this->request->data['Histologia2']['Numero_Laminas'] = $Quantidade_Laminas;
		$this->request->data['Histologia2']['Inclusao'] = $Inclusao;
		$this->request->data['Histologia2']['Descartado'] = 'N';
		$this->request->data['Histologia2']['Removed'] = 'N';
		$this->Histologia2->save($this->request->data);
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
                        $conditions['Histologia2.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Histologia2.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Histologia2->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Histologia2.removed' => 'N');
		$this->set('histologia2s', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Histologia2->exists($id)) {
			throw new NotFoundException(__('Invalid histologia2'));
		}
		$options = array('conditions' => array('Histologia2.' . $this->Histologia2->primaryKey => $id));
		$this->set('histologia2', $this->Histologia2->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Histologia2->create();
			     $Created = new DateTime($this->request->data['Histologia2']['Created']);
                 $this->request->data['Histologia2']['Created'] = $Created->format('Y-m-d H:i');
                                 $Modified = new DateTime($this->request->data['Histologia2']['Modified']);
                 $this->request->data['Histologia2']['Modified'] = $Modified->format('Y-m-d H:i');
                            		     if ($this->Histologia2->save($this->request->data)) {
                                                                $this->Flash->success(__('histologia2').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('histologia2').' '.__('could not be saved. Please, try again.'));
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
		$Histologia = new Histologia3sController();

		if (!$this->Histologia2->exists($id)) {
			throw new NotFoundException(__('Invalid histologia2'));
		}
		if ($this->request->is(array('post', 'put'))) {
		    $Created = new DateTime($this->request->data['Histologia2']['Created']);
            $this->request->data['Histologia2']['Created'] = $Created->format('Y-m-d H:i');
            $Modified = new DateTime($this->request->data['Histologia2']['Modified']);
            $this->request->data['Histologia2']['Modified'] = $Modified->format('Y-m-d H:i');
            $this->request->data['Histologia2']['Removed']='S';
                 if ($this->Histologia2->save($this->request->data)) {
                 	
                 	 $nome = $this->request->data['Histologia2']['Nome_Paciente'];
                     $numero_blocos = $this->request->data['Histologia2']['Numero_Blocos'];
                     $numero_frascos = $this->request->data['Histologia2']['Numero_Frascos'];
                     $tipo = $this->request->data['Histologia2']['Tipo'];
                     $inclusao = $this->request->data['Histologia2']['Inclusao'];
                     $corte = $this->request->data['Histologia2']['Corte'];
                     $etiquetagem = $this->request->data['Histologia2']['Etiquetagem'];
                     
                     $Histologia->salvar($id, $nome, $tipo, $numero_blocos, $numero_frascos, $inclusao, $corte, $etiquetagem);




                     $this->Flash->success(__('histologia2').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('histologia2').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Histologia2.' . $this->Histologia2->primaryKey => $id));
			$this->request->data = $this->Histologia2->find('first', $options);
		}
	 $Created = new DateTime($this->request->data['Histologia2']['Created']);
 $this->request->data['Histologia2']['Created'] = $Created->format('d-m-Y H:i');
                             $Modified = new DateTime($this->request->data['Histologia2']['Modified']);
 $this->request->data['Histologia2']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Histologia2->id = $id;
		if (!$this->Histologia2->exists()) {
			throw new NotFoundException(__('Invalid histologia2'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Histologia2->save($data)) {
            $this->Flash->success(__('histologia2').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('histologia2').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
