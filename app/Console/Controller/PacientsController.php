<?php
App::uses('AppController', 'Controller');
/**
 * Pacients Controller
 *
 * @property Pacient $Pacient
 * @property PaginatorComponent $Paginator
 */
class PacientsController extends AppController {

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
                        $conditions['Pacient.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Pacient.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Pacient->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Pacient.removed' => 'N');
		$this->set('pacients', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pacient->exists($id)) {
			throw new NotFoundException(__('Invalid pacient'));
		}
		$options = array('conditions' => array('Pacient.' . $this->Pacient->primaryKey => $id));
		$this->set('pacient', $this->Pacient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pacient->create();
			     $Data_Nascimento = new DateTime($this->request->data['Pacient']['Data_Nascimento']);
                 $this->request->data['Pacient']['Data_Nascimento'] = $Data_Nascimento->format('Y-m-d H:i');
                                 $Created = new DateTime($this->request->data['Pacient']['Created']);
                 $this->request->data['Pacient']['Created'] = $Created->format('Y-m-d H:i');
                                 $Modified = new DateTime($this->request->data['Pacient']['Modified']);
                 $this->request->data['Pacient']['Modified'] = $Modified->format('Y-m-d H:i');
                            		     if ($this->Pacient->save($this->request->data)) {
                                                                $this->Flash->success(__('pacient').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('pacient').' '.__('could not be saved. Please, try again.'));
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
		if (!$this->Pacient->exists($id)) {
			throw new NotFoundException(__('Invalid pacient'));
		}
		if ($this->request->is(array('post', 'put'))) {
		                                   $Data_Nascimento = new DateTime($this->request->data['Pacient']['Data_Nascimento']);
                                $this->request->data['Pacient']['Data_Nascimento'] = $Data_Nascimento->format('Y-m-d H:i');
                                                            $Created = new DateTime($this->request->data['Pacient']['Created']);
                                $this->request->data['Pacient']['Created'] = $Created->format('Y-m-d H:i');
                                                            $Modified = new DateTime($this->request->data['Pacient']['Modified']);
                                $this->request->data['Pacient']['Modified'] = $Modified->format('Y-m-d H:i');
                            			if ($this->Pacient->save($this->request->data)) {
                                    $this->Flash->success(__('pacient').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('pacient').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Pacient.' . $this->Pacient->primaryKey => $id));
			$this->request->data = $this->Pacient->find('first', $options);
		}
	 $Data_Nascimento = new DateTime($this->request->data['Pacient']['Data_Nascimento']);
 $this->request->data['Pacient']['Data_Nascimento'] = $Data_Nascimento->format('d-m-Y H:i');
                             $Created = new DateTime($this->request->data['Pacient']['Created']);
 $this->request->data['Pacient']['Created'] = $Created->format('d-m-Y H:i');
                             $Modified = new DateTime($this->request->data['Pacient']['Modified']);
 $this->request->data['Pacient']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pacient->id = $id;
		if (!$this->Pacient->exists()) {
			throw new NotFoundException(__('Invalid pacient'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Pacient->save($data)) {
            $this->Flash->success(__('pacient').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('pacient').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
