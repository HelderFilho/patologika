	<?php
$Responsaveis = array();
$quantidadeResponsavel = array();

$contR = 0;

  $Pecas = $this->requestAction('pecas/todasPecas');
      foreach ($Pecas as $Peca) {
        $Responsaveis[$contR] = $Peca['Peca']['Responsavel'];
        $quantidade = $this->requestAction('/pecas/retornaQuantidadeResponsavel/'. $Peca['Peca']['Responsavel']);
        $quantidadeResponsavel[$contR] = $quantidade;
        $contR++;     
}
 
$PecasTempoN = $this->requestAction('pecas/retorna10dias/N');

$PecasTempoS = $this->requestAction('pecas/retorna10dias/S');


$PecasDescartadas = $this->requestAction('pecas/retornaQuantidadeDescartados/S');
$PecasNaoDescartadas = $this->requestAction('pecas/retornaQuantidadeDescartados/N');

?>






<section class="content-header">
	<ol class="breadcrumb">
		<li>
		</li>
		<li class="active">
		</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']},);
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var dataResponsaveis = new google.visualization.DataTable();
        dataResponsaveis.addColumn ('string', 'Responsavel');
        dataResponsaveis.addColumn ('number', 'quantidade');
        dataResponsaveis.addRows(<?php echo $contR ?>);
        <?php
          $k = $contR;
            for ($i = 0; $i < $k; $i++) {
         ?>
         dataResponsaveis.setValue (<?php echo $i ?>, 0, '<?php echo $Responsaveis[$i] ?>');
         dataResponsaveis.setValue (<?php echo $i ?>, 1, <?php echo $quantidadeResponsavel[$i] ?>);
	     <?php             
            }
        ?>
	
    	var dataTempo = new google.visualization.DataTable();
    	dataTempo.addColumn('string', 'Situação');
    	dataTempo.addColumn('number', 'Quantidade');
    	dataTempo.addRows([
    		['Encerrados', <?php echo $PecasTempoS ?>],
    		['Em Andamento', <?php echo $PecasTempoN ?>]
    		]);

  var dataDescartadas = new google.visualization.DataTable();
      dataDescartadas.addColumn('string', 'Situação');
      dataDescartadas.addColumn('number', 'Quantidade');
      dataDescartadas.addRows([
        ['Descartadas', <?php echo $PecasDescartadas ?>],
        ['Não Descartadas', <?php echo $PecasNaoDescartadas ?>]
        ]);

        var optionsClientes = {
          title: 'Total de Pré-Conferências por responsável'
        };

        var optionsTempo = {
        	title: 'Situação dos casos inseridos nos últimos 10 dias'
        };
      
      var optionsDescartadas = {
          title: 'Anátomos descartados nos últimos 30 dias',
          pieHole: 0.4,

        };
        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
        chart.draw(dataResponsaveis, optionsClientes);
		
	 	var Tempo = new google.visualization.PieChart(document.getElementById('tempo'));
		Tempo.draw(dataTempo, optionsTempo);     
       
    var Descartados = new google.visualization.PieChart(document.getElementById('descartadas'));
    Descartados.draw(dataDescartadas, optionsDescartadas);     
       
      }
    </script>
  </head>
  <body>

    <div id="piechart" style="width: 98%; height: 300px; margin-left:1%"></div>
    <br>
    <div id="tempo" style="width: 98%; height: 300px;margin-left: 1%"></div>
 <br>
    <div id="descartadas" style="width: 98%; height: 300px;margin-left: 1%"></div>

  </body>
</html>















	



</section><!-- /.content -->