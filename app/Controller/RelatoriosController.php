<?php

class RelatoriosController extends AppController{

public function index() {

    App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));
    $this->layout = 'pdf'; //this will use the pdf.ctp layout

    $this->set('fpdf', new FPDF('P','mm','A4'));

   $Pecas = $this->requestAction('/Pecas/Tudo');

   $this->set(compact($Pecas, 'Pecas'));
   $this->render('index');

}






}

?>
