
<?php
    $fpdf->AddPage();
      //  $fpdf->Cell(64,10,'CNPJ',1,0,'C',true);
  //  $fpdf->Cell(63,10,'Razao Social',1,0,'C',true);
  //  $fpdf->Cell(63,10,'Nome Fantasia',1,0,'C',true);


    $fpdf->Ln();
    $fpdf->SetFont('Arial', 'B', 18);
    $fpdf->Cell(185, 10, utf8_decode("Relatório de Descartes "), 0, 0, 'C');
    $fpdf->Ln();
    $fpdf->Ln();
    $fpdf->Ln();


    $fpdf->SetFont('Arial', 'B', 12);
    $fpdf->Cell(40, 10, utf8_decode('Responsável'), 0 );
    $fpdf->Cell(40, 10, 'Data', 0 );
    $fpdf->Ln();
    $fpdf->SetFont('Arial', '', 12);

    foreach($Pecas as $Peca){
      if ($Peca['Peca']['Descartado']=='S'){
      $fpdf->Cell(40, 10, strtoupper($Peca['Peca']['Responsavel']), 0 );
      
    $fpdf->Cell(40, 10, strtoupper($Peca['Peca']['Date']), 0 );

      $fpdf->Ln();
    
      }

    
    }





    $fpdf->Output();


?>



