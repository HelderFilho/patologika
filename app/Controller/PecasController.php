<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
CakePlugin::load('Upload');
App::import('Controller', 'Fichas');


/**
 * Pecas Controller
 *
 * @property Peca $Peca
 * @property PaginatorComponent $Paginator
 */
class PecasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Upload', 'Paginator');
    public $uses = array();

/**
 * index method
 * Powered by Frame2Days
 * @return void
 */

    public function todasPecas(){
                return $this->Peca->find('all', array(
                    'fields'=>'DISTINCT Peca.Responsavel'));

    }

    public function Tudo(){

        return $this->Peca->find('all');
    }

    public function RetornaPeca($id=0){
        return $this->Peca->find('first', array('conditions'=> array('Peca.id'=>$id)));
    }


    public function retornaQuantidadeResponsavel($Responsavel){
        return $this->Peca->find('count', array(
            'conditions'=> array('Peca.Responsavel'=>$Responsavel)
        ));
    }



    public function retorna10dias($Removed){
        $tempo = time() - (10*24*60*60);
        $DataTempo = date('Y-m-d h:m', $tempo);
        return $this->Peca->find('count', array(
            'conditions'=> array(
                'Peca.Created > '=>$DataTempo,
                'Peca.Removed'=>$Removed)));
    }

public function retornaQuantidadeDescartados($Descartado){
        $tempo = time() - (30*24*60*60);
        $DataTempo = date('Y-m-d h:m', $tempo);
        return $this->Peca->find('count', array(
            'conditions'=> array(
                'Peca.Created > '=>$DataTempo,
                'Peca.Descartado'=>$Descartado)));
    }






public function descartar($id = null){
    $this->Peca->id = $id;
    $this->Peca->set(array('Id'=>$id, 'Descartado'=>'S'));
    if (!$this->Peca->exists()) {
      throw new NotFoundException(__('Invalid peca'));
    }
    $data = array('id' => $id, 'descartado' => 'S');
    $this->request->allowMethod('post', 'delete');
    if ($this->Peca->save($data)) {
            $this->Flash->success(__('peca').' '.__('has been finished.'));
    } else {
            $this->Flash->error(__('peca').' '.__('could not be finished. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index/'));
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
                        $conditions['Peca.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Peca.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Peca->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Peca.removed' => 'N', 'Peca.Descartado'=>'N');
		$this->set('pecas', $this->Paginator->paginate($options));
		
}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Peca->exists($id)) {
			throw new NotFoundException(__('Invalid peca'));
		}
		$options = array('conditions' => array('Peca.' . $this->Peca->primaryKey => $id));
		$this->set('peca', $this->Peca->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */


public function salvarFoto($foto){

$encoded_data = $foto;
    $binary_data = base64_decode( $encoded_data );
    
    // save to server (beware of permissions)
    $result = file_put_contents( 'webcam.jpg', $binary_data );
    if (!$result) die("Could not save image!  Check file permissions.");

}




	public function add() {
        $title = 'Pré-Conferência';
        $this->set(compact('title'));
         $fichas = new FichasController();

         App::uses('Sanitize', 'Utility');
            $quantidade  = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5');
              $this->set(compact('quantidade'));
        		if ($this->request->is('post')) {
		          	$this->Peca->create();
			             $Date = new DateTime($this->request->data['Peca']['Date']);
                         $this->request->data['Peca']['Date'] = $Date->format('Y-m-d H:i');
                         $Created = new DateTime($this->request->data['Peca']['Created']);
                         $this->request->data['Peca']['Created'] = $Created->format('Y-m-d H:i');
                         $Modified = new DateTime($this->request->data['Peca']['Modified']);
                         $this->request->data['Peca']['Modified'] = $Modified->format('Y-m-d H:i');
                   		  



                             if ($this->Peca->save($this->request->data)) {
                             //$f = $this->request->data['Peca']['foto'];
                                $this->Upload->uploadFotoPeca($this->request->data['Peca']['Fotos'], $this->Peca->getLastInsertID());

                                $this->Upload->uploadFotoPeca($this->request->data['Peca']['Videos'], $this->Peca->getLastInsertID());

                                    $foto = base64_decode($this->request->data['Peca']['Foto']);
                                    $result = file_put_contents( 'webcam.jpeg', $foto );
                                //    $fichas->viewpdf($this->Peca->getLastInsertID());

                                // $this->Upload->uploadFotoPeca($foto);
                                 $this->Flash->success(__('peca').' '.__('has been saved.'));
                                      //  return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('peca').' '.__('could not be saved. Please, try again.'));
                        			}
		          return $this->redirect(array('controller' => 'fichas', 'action'=>'viewpdf/'.$this->Peca->getLastInsertID()));

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
		if (!$this->Peca->exists($id)) {
			throw new NotFoundException(__('Invalid peca'));
		}
		if ($this->request->is(array('post', 'put'))) {
		                                 $this->Lamina->id = $this->request->data['Peca']['Id'];

                                           $Date = new DateTime($this->request->data['Peca']['Date']);
                                $this->request->data['Peca']['Date'] = $Date->format('Y-m-d H:i');
                                                            $Created = new DateTime($this->request->data['Peca']['Created']);
                                $this->request->data['Peca']['Created'] = $Created->format('Y-m-d H:i');
                                                            $Modified = new DateTime($this->request->data['Peca']['Modified']);
                                $this->request->data['Peca']['Modified'] = $Modified->format('Y-m-d H:i');
                            			if ($this->Peca->save($this->request->data)) {
                                    $this->Flash->success(__('peca').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('peca').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Peca.' . $this->Peca->primaryKey => $id));
			$this->request->data = $this->Peca->find('first', $options);
		}
	 $Date = new DateTime($this->request->data['Peca']['Date']);
 $this->request->data['Peca']['Date'] = $Date->format('d-m-Y H:i');
                             $Created = new DateTime($this->request->data['Peca']['Created']);
 $this->request->data['Peca']['Created'] = $Created->format('d-m-Y H:i');
                             $Modified = new DateTime($this->request->data['Peca']['Modified']);
 $this->request->data['Peca']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*
	public function delete($id = null) {
		$this->Peca->id = $id;
		if (!$this->Peca->exists()) {
			throw new NotFoundException(__('Invalid peca'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Peca->save($data)) {
            $this->Flash->success(__('peca').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('peca').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
*/

    public function delete($id = null) {

        if (!$this->Peca->exists($id)) {
            throw new NotFoundException(__('Invalid lamina'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Peca->read(null,$id);
            $this->Peca->set(array('Id'=>$id, 'Removed'=>'S'));

            if ($this->Peca->save()) {
                $this->Flash->success(__('peca').' '.__('has been deleted.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('peca').' '.__('could not be deleted. Please, try again.'));
                return $this->redirect(array('action' => 'index'));

            }
        } else {
            $options = array('conditions' => array('Peca.' . $this->Lamina->primaryKey => $id));
            $this->request->data = $this->Peca->find('first', $options);
        }
      }

}
