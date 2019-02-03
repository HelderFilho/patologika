<?php
App::uses('BarcodeHelper', 'Vendor');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class FichasController extends AppController{

public function viewpdf($id) {
$data_to_encode = $id;
    
$barcode=new BarcodeHelper();
        
// Generate Barcode data
$barcode->barcode();
$barcode->setType('C128');
$barcode->setCode($data_to_encode);
$barcode->setSize(80,200);
    
// Generate filename            
$random = rand(0,1000000);
$dir = new Folder(WWW_ROOT. DS. 'barcodes' . DS . $id, true);

$file = $dir->path. DS.  'code_'.$id.'.png';
    
// Generates image file on server            
$barcode->writeBarcodeFile($file);

    App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));
    $this->layout = 'pdf'; //this will use the pdf.ctp layout

    $this->set('fpdf', new FPDF('P','mm','A4'));

   $Pecas = $this->requestAction('/Pecas/RetornaPeca/' . $id);

   $this->set(compact($Pecas, 'Pecas'));
   $this->render('pdf');

}






}

?>
