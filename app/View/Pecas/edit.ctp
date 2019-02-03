<section class="content-header">
    <h1>
        <?php echo __('Pecas'); ?>
        <small><?php echo __('Edit').' '.__('Peca'); ?></small>
    </h1>
     <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Pecas'),'/Pecas');
              $this->Html->addCrumb(__('Edit').' '.__('Peca'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="pecas form" style="margin: 20px" >
<?php echo $this->Form->create('Peca'); ?>
    <fieldset>
        <div class="panel panel-default">
            <div class="panel-heading" align="right">
                <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
                <a href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle="tooltip" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
            </div>
            <div class="row">
                <div class="div'=>'col-sm-12 col-md-7 col-xs-12">
                    <div style="margin: 20px">
                         <?php
					
					echo $this->Html->div('row',$this->Form->hidden('Id',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Id'),'title'=>__('Id'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('Responsavel',
					array('label'=>'Responsável',
							'div'=>'col-xs-12',
							'data-toggle'=>'tooltip',
							'data-original-title'=>__('Responsável'),
							'title'=>__('Responsável'),
							'options'=> array('Helder Filho' => 'Helder Filho','Luana Cardoso'=>'Luana Cardoso','Airton Cesar'=>'Airton Cesar' ),
							'empty'=>'Escolha',
							'class'=>'form-control')),
					array('escape'=>false));
					
					?>
					
	
			<?php		
			    	echo $this->Html->div('row',$this->Form->hidden('Removed',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Removed'),'value'=>'N','title'=>__('Removed'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->hidden('Created',array('id'=>'Created','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Created'),'title'=>__('Created'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->hidden('Modified',array('id'=>'Modified','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Modified'),'title'=>__('Modified'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('Tipo',
					 array('div'=>'col-xs-12',
					 'data-toggle'=>'tooltip',
					 'options' => array('Mucosas'=>'Mucosas', 
					 'Pele'=>'Pele',
					 'Hemorroidas'=>'Hemorróidas',
					 'Medula_Ossea'=>'Medula Óssea',
					 'Core_Biopsy_Mama'=>'Core Biopsy Mama',
					 'Biopsia_Renal' => 'Biópia Renal',
					 'Lipoma'=>'Lipoma',
					 'Linfonodo'=>'Linfonodo',
					 'Fragmentos_Osseos'=>'Fragmentos Ósseos',
					 'Colo_Uterino'=>'Colo Uterino',
					 'Prostata'=> 'Próstata',
					 'Apendice_Cecal'=>'Apêndice Cecal',
					 'Vesicula_Biliar'=>'Vesícula Biliar',
					 'Testiculo'=>'Testículo',
					 'Utero'=>'Útero',
					 'Rim'=>'Rim',
					 'Pulmao'=>'Pulmão',
					 'Tireoide'=>'Tireóide'),
                     'empty'=>'Escolha',
                     'onchange'=>'ShowSelect()',
					 'data-original-title'=>__('Tipo'),
					 'title'=>__('Tipo'),
					 'id'=>'Tipo_Select',
					 'type'=>'select',
					 'class'=>'form-control')));
            ?>
			<div id = 'Mucosas' hidden>		 
				<?php
				 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
				 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
				 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>		 
			<div id='Pele' hidden>
			    <?php
					 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Origem_Pele',array('label'=>'Origem da pele','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Origem_Pele'),'title'=>__('Origem_Pele'),'class'=>'form-control input-sm')),array('escape'=>false));
 					 echo $this->Html->div('row',$this->Form->input('TiposCorte_Pele',array('label'=>'Tipos de corte da pele','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('TiposCorte_Pele'),'title'=>__('TiposCorte_Pele'),'class'=>'form-control input-sm')),array('escape'=>false));
    				 echo $this->Html->div('row',$this->Form->input('FormasRecebimento_Mucosas',array('label'=>'Formas de recebimento da pele','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('FormasRecebimento_Mucosas'),'title'=>__('FormasRecebimento_Mucosas'),'class'=>'form-control input-sm')),array('escape'=>false));
                     echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));					   
			    ?>
			</div>		 
			<div id='Hemorroidas' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>    		 
			<div id='Medula_Ossea' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>		 
			<div id='Core_Biopsy_Mama' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>	 
			<div id='Biopsia_Renal' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>	
			<div id='Lipoma' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
			<div id='Linfonodo' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Maior',array('label'=>'Tamanho da maior formação nodular','div'=>'col-xs-12','data-toggle'=>'tooltsip','data-original-title'=>__('Tamanho_Maior'),'title'=>__('Tamanho_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Menor',array('label'=>'Tamanho da menor formação nodular','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Menor'),'title'=>__('Tamanho_Menor'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>	
			<div id='Fragmentos_Osseos' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho_Maior',array('label'=>'Tamanho do maior fragmento','div'=>'col-xs-12','data-toggle'=>'tooltsip','data-original-title'=>__('Tamanho_Maior'),'title'=>__('Tamanho_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Menor',array('label'=>'Tamanho do menor fragmento','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Menor'),'title'=>__('Tamanho_Menor'),'class'=>'form-control input-sm')),array('escape'=>false));
			    	 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>	
		    <div id='Colo_Uterino' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
			<div id='Prostata' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));
    				 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
	    	<div id='Apendice_Cecal' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
			<div id='Vesicula_Biliar' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
			<div id='Testiculo' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Testiculo',array('label'=>'Tamanho do testículo','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Testiculo'),'title'=>__('Tamanho_Testiculo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Epididimo',array('label'=>'Tamanho do epidídimo','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Epididimo'),'title'=>__('Tamanho_Epididimo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Cordao_Espermatico',array('label'=>'Tamanho do cordão espermático','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cordao_Espermatico'),'title'=>__('Tamanho_Cordao_Espermatico'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Area_Aderencia_Face_Lateral',array('label'=>'Tamanho da aderência da face lateral','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Area_Aderencia_Face_Lateral'),'title'=>__('Area_Aderencia_Face_Lateral'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Cortes',array('label'=>'Tamanho dos cortes','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cortes'),'title'=>__('Tamanho_Cortes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Quantidade_Linfonodos',array('label'=>'Quantidade de linfonodos','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Linfonodos'),'title'=>__('Quantidade_Linfonodos'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Maior',array('label'=>'Tamanho do maior','div'=>'col-xs-12','data-toggle'=>'tooltsip','data-original-title'=>__('Tamanho_Maior'),'title'=>__('Tamanho_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
			<div id='Utero' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));
                     echo $this->Html->div('row',$this->Form->input('Tamanho_Colo_Uterino',array('label'=>'Tamanho do colo uterino','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Colo_Uterino'),'title'=>__('Tamanho_Colo_Uterino'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Cavidade_Uterina',array('label'=>'Tamanho da cavidade uterina','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cavidade_Uterina'),'title'=>__('Tamanho_Cavidade_Uterina'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Endometrio',array('label'=>'Tamanho do endometrio','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Endometrio'),'title'=>__('Tamanho_Endometrio'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Quantidade_Nodulos',array('label'=>'Quantidade de nódulos','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Nodulos'),'title'=>__('Quantidade_Nodulos'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Maior',array('label'=>'Tamanho do maior','div'=>'col-xs-12','data-toggle'=>'tooltsip','data-original-title'=>__('Tamanho_Maior'),'title'=>__('Tamanho_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Tubas_Uterinas',array('label'=>'Tamanho das tubas uterinas','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Tubas_Uterinas'),'title'=>__('Tamanho_Tubas_Uterinas'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso_Ovario_Esquerdo',array('label'=>'Peso ovário esquerdo','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso_Ovario_Esquerdo'),'title'=>__('Peso_Ovario_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Ovario_Esquerdo',array('label'=>'Tamanho do ovário esquerdo','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Ovario_Esquerdo'),'title'=>__('Tamanho_Ovario_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
			<div id='Rim' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Cortes',array('label'=>'Tamanho dos cortes','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cortes'),'title'=>__('Tamanho_Cortes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Hilo_Renal',array('label'=>'Distância para o hilo renal','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Hilo_Renal'),'title'=>__('Distancia_Hilo_Renal'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Segmento_Ureter',array('label'=>'Tamanho do segmento de ureter','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Segmento_Ureter'),'title'=>__('Tamanho_Segmento_Ureter'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Lesao_Maior',array('label'=>'Tamanho da lesão maior','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Maior'),'title'=>__('Tamanho_Lesao_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Lesao_Menor',array('label'=>'Tamanho da lesão menor','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Menor'),'title'=>__('Tamanho_Lesao_Menor'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
            <div id='Pulmao' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Coto_Bronquico',array('label'=>'Tamanho do coto brônquico','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Coto_Bronquico'),'title'=>__('Tamanho_Coto_Bronquico'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Para_Coto_Bronquico',array('label'=>'Distância para o coto brônquico','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Coto_Bronquico'),'title'=>__('Distancia_Para_Coto_Bronquico'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Para_Pleura',array('label'=>'Distância para a pleura','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Pleura'),'title'=>__('Distancia_Para_Pleura'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Margem_Cirurgica',array('label'=>'Distância da margem cirúrgica','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Margem_Cirurgica'),'title'=>__('Distancia_Margem_Cirurgica'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Linfonodo_Maior',array('label'=>'Tamanho do linfonodo maior','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Linfonodo_Maior'),'title'=>__('Tamanho_Linfonodo_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Quantidade_Linfonodos',array('label'=>'Quantidade de linfonodos','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Linfonodos'),'title'=>__('Quantidade_Linfonodos'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
			<div id='Tireoide' hidden>
			    <?php
			    	 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Lobo_Esquerdo',array('label'=>'Tamanho do lobo esquerdo','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lobo_Esquerdo'),'title'=>__('Tamanho_Lobo_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Istmo',array('label'=>'Tamanho do istmo','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Istmo'),'title'=>__('Tamanho_Istmo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('label'=>'Secções','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('label'=>'Características','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
			</div>
		

			<?php

					echo $this->Html->div('row',$this->Form->input('Date',array('id'=>'Date','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('Numero_Frascos',array('label'=>'Número de Frascos', 'min'=>'0','div'=>'col-xs-12','id'=>'frascos','data-toggle'=>'tooltip','data-original-title'=>__('Numero_Frascos'),'title'=>__('Numero_Frascos'),'class'=>'form-control input-sm')),array('escape'=>false));
                    echo $this->Html->div('row',$this->Form->input('Complexidade',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Complexidade'),'title'=>__('Complexidade'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('Numero_Blocos',array('label'=>'Quantidade de blocos','min'=>'0','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Numero_Blocos'),'title'=>__('Numero_Blocos'),'class'=>'form-control input-sm')),array('escape'=>false));

					echo $this->Html->div('row',$this->Form->input('Conforme',
                                        				     array('div'=>'col-xs-12',
                                        				     'label'=>'Está conforme?',
                                        				     'data-toggle'=>'tooltip',
                                        				     'data-original-title'=>__('Conforme'),
                                        				     'title'=>__('Conforme'),
                                        				     'class'=>'form-control input-sm',
                                        				     'data-on-label' => 'Sim', 
                                        				     'data-off-label' => 'Não', 
                                        				     'checked',
                                        				     'id'=>'Conforme_Check',
                                        				     'onchange'=>'ShowHide()',
                                        				     'value'=>'Sim',
                                        				     'hiddenField'=>'Não',
                                                            'type' => 'checkbox')));
						?>
	 <div id="Inconformidade" hidden>
            <?php
					 echo $this->Html->div('row',$this->Form->input('Nao_Conformidade',array('label'=>'Não conformidade','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Nao_Conformidade'),'title'=>__('Nao_Conformidade'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Falha_Identificacao',array('label'=>'Falha na identificação','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Falha_Identificacao'),'title'=>__('Falha_Identificacao'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Pagamento',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Pagamento'),'title'=>__('Pagamento'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Material_Trocado',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Material_Trocado'),'title'=>__('Material_Trocado'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Material_Ausente',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Material_Ausente'),'title'=>__('Material_Ausente'),'class'=>'form-control input-sm')),array('escape'=>false));
	       ?>
		</div>






                    </div>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <td style="padding: 15px" ><button class="btn btn-primary" title='<?=__('Confirm')?>' data-original-title='<?=__('Confirm')?>' data-toggle="tooltip" type="submit"><i class="fa fa-check fa-fw"></i> <?=__('Confirm')?></button></td>
                <td><a href="<?=$this->Html->url(array('action' => 'index'));?>"><button title='<?=__('Cancel')?>' data-original-title='<?=__('Cancel')?>' data-toggle="tooltip" class="btn btn-primary" type="button"><i class="fa fa-close fa-fw"></i><?=__('Cancel')?></button></a></td>
            </tr>
        </table>
	</fieldset>
</div>
<script>
    $(function () {
                    $('#Date').datetimepicker({
                         locale: 'pt-br',
                        format: 'DD/MM/YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script><script>
    $(function () {
                    $('#Created').datetimepicker({
                        locale: 'pt-br',
                        format: 'DD/MM/YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script><script>
    $(function () {
                    $('#Modified').datetimepicker({
                        locale: 'pt-br',
                        format: 'DD/MM/YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script>


<script>
    function ShowHide (){
        if (document.getElementById('Conforme_Check').checked==true){
            document.getElementById('Inconformidade').style.display='none';

        }
        else{
            document.getElementById('Inconformidade').style.display='block';
          
        }
    return
  }
</script>


<script language="javascript" type="text/javascript">
	window.onload = function carregar(){

		    document.getElementById('Mucosas').style.display='none';
            document.getElementById('Pele').style.display='none';
            document.getElementById('Hemorroidas').style.display='none';
            document.getElementById('Medula_Ossea').style.display='none';
            document.getElementById('Core_Biopsy_Mama').style.display='none';
            document.getElementById('Biopsia_Renal').style.display='none';
            document.getElementById('Lipoma').style.display='none';
            document.getElementById('Linfonodo').style.display='none';
            document.getElementById('Fragmentos_Osseos').style.display='none';
            document.getElementById('Colo_Uterino').style.display='none';
            document.getElementById('Prostata').style.display='none';
            document.getElementById('Apendice_Cecal').style.display='none';
            document.getElementById('Vesicula_Biliar').style.display='none';
            document.getElementById('Testiculo').style.display='none';
            document.getElementById('Utero').style.display='none';
            document.getElementById('Rim').style.display='none';
            document.getElementById('Pulmao').style.display='none';
            document.getElementById('Tireoide').style.display='none';
		    document.getElementById(document.getElementById('Tipo_Select').value).style.display = 'block';


        if (document.getElementById('Conforme_Check').checked==true){
            document.getElementById('Inconformidade').style.display='none';

        }
        else{
            document.getElementById('Inconformidade').style.display='block';
        }
    return

	}



</script>



<script>
    function ShowSelect() {
            document.getElementById('Pele').style.display='none';
            document.getElementById('Mucosas').style.display='none';
            document.getElementById('Hemorroidas').style.display='none';
            document.getElementById('Medula_Ossea').style.display='none';
            document.getElementById('Core_Biopsy_Mama').style.display='none';
            document.getElementById('Biopsia_Renal').style.display='none';
            document.getElementById('Lipoma').style.display='none';
            document.getElementById('Linfonodo').style.display='none';
            document.getElementById('Fragmentos_Osseos').style.display='none';
            document.getElementById('Colo_Uterino').style.display='none';
            document.getElementById('Prostata').style.display='none';
            document.getElementById('Apendice_Cecal').style.display='none';
            document.getElementById('Vesicula_Biliar').style.display='none';
            document.getElementById('Testiculo').style.display='none';
            document.getElementById('Utero').style.display='none';
            document.getElementById('Rim').style.display='none';
            document.getElementById('Pulmao').style.display='none';
            document.getElementById('Tireoide').style.display='none';
            document.getElementById(document.getElementById('Tipo_Select').value).style.display = 'block';

}
</script>
