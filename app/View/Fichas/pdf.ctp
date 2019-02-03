
<?php
    $fpdf->AddPage();
      //  $fpdf->Cell(64,10,'CNPJ',1,0,'C',true);
  //  $fpdf->Cell(63,10,'Razao Social',1,0,'C',true);
  //  $fpdf->Cell(63,10,'Nome Fantasia',1,0,'C',true);
    $dirFotos = new Folder(WWW_ROOT . 'barcodes'.DS.$Pecas['Peca']['Id']);
    $fotos = $dirFotos->find('.*\.(png|jpg|jpeg)', true);
        foreach ($fotos as $foto ){
            $fpdf->Image($dirFotos->path . DS . $foto, 145, 10, 40, 10);
        }







    $fpdf->Ln();
    $fpdf->SetFont('Arial', 'B', 18);

    $fpdf->Cell(185, 10, strtoupper("Controle de Bancada - AP       Exame ".$Pecas['Peca']['Numero_Blocos']), 0 );
    $fpdf->Ln();
    
/*

  VERSÃO SEM BORDAS NO MEIO
*/ 
    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Paciente: ",'L,T,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(28, 20);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper($Pecas['Peca']['Responsavel']), 0);
    $fpdf->Ln();    

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Solicitante: ",'L,,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(32, 28);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper("Junior Mendes"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, utf8_decode("Procedência: "),'L,,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(34, 36);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper(" Hospital Cirurgia"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Recebido: ",'L,,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(30,44);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper("22/08/2018"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, utf8_decode("Convênio: "),'L,,R,B');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(30,52);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper(" Hospital Cirurgia - SUS"),0);
    $fpdf->Ln();
     $fpdf->Ln();


/*     INFORMAÇÕES A MAIS PARA TESTES

   $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Paciente: ",'L,T,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(28, 68);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper($Pecas['Peca']['Responsavel']), 0);
    $fpdf->Ln();    

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Solicitante: ",'L,,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(32, 76);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper("Junior Mendes"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, utf8_decode("Procedência: "),'L,,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(34, 84);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper(" Hospital Cirurgia"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Recebido: ",'L,,R');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(30,92);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper("22/08/2018"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, utf8_decode("Convênio: "),'L,,R,B');
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(30,100);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper(" Hospital Cirurgia - SUS"),0);
    $fpdf->Ln();
  */
/*
  VERSÃO COM BORDAS NO MEIO
 
    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Paciente: ",1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(28, 20);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper($Pecas['Peca']['Responsavel']), 0);
    $fpdf->Ln();    

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Solicitante: ",1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(32, 28);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper("Junior Mendes"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, utf8_decode("Procedência: "),1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(34, 36);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper(" Hospital Cirurgia"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, "Recebido: ",1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(30,44);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper("22/08/2018"),0);
    $fpdf->Ln();

    $fpdf->SetTextColor(105,105,105);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(180, 8, utf8_decode("Convênio: "),1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->SetXY(30,52);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(145, 8, strtoupper(" Hospital Cirurgia - SUS"),0);
    $fpdf->Ln();
 */   




    $fpdf->SetFillColor(224,235,255);
    $fpdf->SetTextColor(0);
    $fpdf->SetFont('Arial', 'B', 7);
    $x = 10;
    $y = 10;
    $PecaString =  $Pecas['Peca']['Responsavel']. "\n" . $Pecas['Peca']['Numero_Blocos'];
      
      for ($i=64; $i <113 ; $i=$i+12) { 
        # code...
        for ($j=10; $j < 171; $j=$j+20) { 
          # code...
               $fpdf->SetXY($j, $i);

        $fpdf->MultiCell(20,6,$PecaString,1,'L',false);
               $fpdf->SetXY($j, $i);

        }

      }


    $fpdf->Output();


?>



