<?php
App::uses('AppController', 'Controller');
/**
 * Arquivos Controller
 *
 * @property Arquivo $Arquivo
 * @property PaginatorComponent $Paginator
 */
class ArquivosController extends AppController {

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


public function salvar($Id, $Nome){
		$this->Arquivo->create();
		
		$this->request->data['Arquivo']['Id'] = $Id;
		$this->request->data['Arquivo']['Nome_Paciente'] = $Nome;		
		$this->request->data['Arquivo']['Removed'] = 'N';
		$this->Arquivo->save($this->request->data);
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
                        $conditions['Arquivo.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Arquivo.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Arquivo->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Arquivo.removed' => 'N');
		$this->set('arquivos', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Arquivo->exists($id)) {
			throw new NotFoundException(__('Invalid arquivo'));
		}
		$options = array('conditions' => array('Arquivo.' . $this->Arquivo->primaryKey => $id));
		$this->set('arquivo', $this->Arquivo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Arquivo->create();
					     if ($this->Arquivo->save($this->request->data)) {
                                                                $this->Flash->success(__('arquivo').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('arquivo').' '.__('could not be saved. Please, try again.'));
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
		if (!$this->Arquivo->exists($id)) {
			throw new NotFoundException(__('Invalid arquivo'));
		}
		if ($this->request->is(array('post', 'put'))) {
		   			if ($this->Arquivo->save($this->request->data)) {
                                    $this->Flash->success(__('arquivo').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('arquivo').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Arquivo.' . $this->Arquivo->primaryKey => $id));
			$this->request->data = $this->Arquivo->find('first', $options);
		}
		}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Arquivo->id = $id;
		if (!$this->Arquivo->exists()) {
			throw new NotFoundException(__('Invalid arquivo'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Arquivo->save($data)) {
            $this->Flash->success(__('arquivo').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('arquivo').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
