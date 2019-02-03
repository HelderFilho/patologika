<section class="content-header">
    <h1>
        <?php echo __('Pecas'); ?>
        <small><?php echo __('All Registered'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Pecas'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
    
</section>
<div class="pecas index" style="margin: 20px" >
    <div class="panel panel-default">
        <div class="panel-heading" align="right">
            <section class="content-header">
                <?php echo $this->Html->link($this->Html->tag('button', $this->Html->tag('i', '', array('class' => 'fa fa-refresh fa-fw')), array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Refresh'),'title'=>__('Refresh'),'escape' => false)), $this->Html->url(), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->tag('button', $this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')), array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Add'),'title'=>__('Add'),'escape' => false)), $this->Html->url(array('action' => 'add')), array('escape' => false)); ?>
            </section>
        </div>
        <div class="table-responsive">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid" style="margin: 20px">                 
                <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                	<thead>
                	   <tr>
                    	<th><?php echo $this->Paginator->sort('Id',__('Id'),array('data-toggle'=>'tooltip','data-original-title'=>__('Id'),'title'=>__('Id'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Responsavel',__('Responsavel'),array('data-toggle'=>'tooltip','data-original-title'=>__('Responsavel'),'title'=>__('Responsavel'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Date',__('Date'),array('data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Numero_Frascos',__('Numero_Frascos'),array('data-toggle'=>'tooltip','data-original-title'=>__('Numero_Frascos'),'title'=>__('Numero_Frascos'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Conforme',__('Conforme'),array('data-toggle'=>'tooltip','data-original-title'=>__('Conforme'),'title'=>__('Conforme'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Complexidade',__('Complexidade'),array('data-toggle'=>'tooltip','data-original-title'=>__('Complexidade'),'title'=>__('Complexidade'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Numero_Blocos',__('Numero_Blocos'),array('data-toggle'=>'tooltip','data-original-title'=>__('Numero_Blocos'),'title'=>__('Numero_Blocos'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Nao_Conformidade',__('Nao_Conformidade'),array('data-toggle'=>'tooltip','data-original-title'=>__('Nao_Conformidade'),'title'=>__('Nao_Conformidade'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Falha_Identificacao',__('Falha_Identificacao'),array('data-toggle'=>'tooltip','data-original-title'=>__('Falha_Identificacao'),'title'=>__('Falha_Identificacao'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Pagamento',__('Pagamento'),array('data-toggle'=>'tooltip','data-original-title'=>__('Pagamento'),'title'=>__('Pagamento'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Material_Trocado',__('Material_Trocado'),array('data-toggle'=>'tooltip','data-original-title'=>__('Material_Trocado'),'title'=>__('Material_Trocado'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Material_Ausente',__('Material_Ausente'),array('data-toggle'=>'tooltip','data-original-title'=>__('Material_Ausente'),'title'=>__('Material_Ausente'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Removed',__('Removed'),array('data-toggle'=>'tooltip','data-original-title'=>__('Removed'),'title'=>__('Removed'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Created',__('Created'),array('data-toggle'=>'tooltip','data-original-title'=>__('Created'),'title'=>__('Created'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Modified',__('Modified'),array('data-toggle'=>'tooltip','data-original-title'=>__('Modified'),'title'=>__('Modified'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho',__('Tamanho'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Seccoes',__('Seccoes'),array('data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Caracteristicas',__('Caracteristicas'),array('data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Origem_Pele',__('Origem_Pele'),array('data-toggle'=>'tooltip','data-original-title'=>__('Origem_Pele'),'title'=>__('Origem_Pele'))); ?></th>
                            <th><?php echo $this->Paginator->sort('FormasRecebimento_Mucosas',__('FormasRecebimento_Mucosas'),array('data-toggle'=>'tooltip','data-original-title'=>__('FormasRecebimento_Mucosas'),'title'=>__('FormasRecebimento_Mucosas'))); ?></th>
                            <th><?php echo $this->Paginator->sort('TiposCorte_Pele',__('TiposCorte_Pele'),array('data-toggle'=>'tooltip','data-original-title'=>__('TiposCorte_Pele'),'title'=>__('TiposCorte_Pele'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Maior',__('Tamanho_Maior'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Maior'),'title'=>__('Tamanho_Maior'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Menor',__('Tamanho_Menor'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Menor'),'title'=>__('Tamanho_Menor'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Peso',__('Peso'),array('data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tipo',__('Tipo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tipo'),'title'=>__('Tipo'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Testiculo',__('Tamanho_Testiculo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Testiculo'),'title'=>__('Tamanho_Testiculo'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Epididimo',__('Tamanho_Epididimo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Epididimo'),'title'=>__('Tamanho_Epididimo'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Cordao_Espermatico',__('Tamanho_Cordao_Espermatico'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cordao_Espermatico'),'title'=>__('Tamanho_Cordao_Espermatico'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Area_Aderencia_Face_Lateral',__('Area_Aderencia_Face_Lateral'),array('data-toggle'=>'tooltip','data-original-title'=>__('Area_Aderencia_Face_Lateral'),'title'=>__('Area_Aderencia_Face_Lateral'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Cortes',__('Tamanho_Cortes'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cortes'),'title'=>__('Tamanho_Cortes'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Quantidade_Linfonodos',__('Quantidade_Linfonodos'),array('data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Linfonodos'),'title'=>__('Quantidade_Linfonodos'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Colo_Uterino',__('Tamanho_Colo_Uterino'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Colo_Uterino'),'title'=>__('Tamanho_Colo_Uterino'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Cavidade_Uterina',__('Tamanho_Cavidade_Uterina'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cavidade_Uterina'),'title'=>__('Tamanho_Cavidade_Uterina'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Endometrio',__('Tamanho_Endometrio'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Endometrio'),'title'=>__('Tamanho_Endometrio'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Quantidade_Nodulos',__('Quantidade_Nodulos'),array('data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Nodulos'),'title'=>__('Quantidade_Nodulos'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Tubas_Uterinas',__('Tamanho_Tubas_Uterinas'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Tubas_Uterinas'),'title'=>__('Tamanho_Tubas_Uterinas'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Peso_Ovario_Esquerdo',__('Peso_Ovario_Esquerdo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Peso_Ovario_Esquerdo'),'title'=>__('Peso_Ovario_Esquerdo'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Ovario_Esquerdo',__('Tamanho_Ovario_Esquerdo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Ovario_Esquerdo'),'title'=>__('Tamanho_Ovario_Esquerdo'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Distancia_Hilo_Renal',__('Distancia_Hilo_Renal'),array('data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Hilo_Renal'),'title'=>__('Distancia_Hilo_Renal'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Segmento_Ureter',__('Tamanho_Segmento_Ureter'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Segmento_Ureter'),'title'=>__('Tamanho_Segmento_Ureter'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Lesao_Maior',__('Tamanho_Lesao_Maior'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Maior'),'title'=>__('Tamanho_Lesao_Maior'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Lesao_Menor',__('Tamanho_Lesao_Menor'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Menor'),'title'=>__('Tamanho_Lesao_Menor'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Coto_Bronquico',__('Tamanho_Coto_Bronquico'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Coto_Bronquico'),'title'=>__('Tamanho_Coto_Bronquico'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Distancia_Para_Coto_Bronquico',__('Distancia_Para_Coto_Bronquico'),array('data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Coto_Bronquico'),'title'=>__('Distancia_Para_Coto_Bronquico'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Distancia_Para_Pleura',__('Distancia_Para_Pleura'),array('data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Pleura'),'title'=>__('Distancia_Para_Pleura'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Distancia_Margem_Cirurgica',__('Distancia_Margem_Cirurgica'),array('data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Margem_Cirurgica'),'title'=>__('Distancia_Margem_Cirurgica'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Linfonodo_Maior',__('Tamanho_Linfonodo_Maior'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Linfonodo_Maior'),'title'=>__('Tamanho_Linfonodo_Maior'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Lobo_Esquerdo',__('Tamanho_Lobo_Esquerdo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lobo_Esquerdo'),'title'=>__('Tamanho_Lobo_Esquerdo'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tamanho_Istmo',__('Tamanho_Istmo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Istmo'),'title'=>__('Tamanho_Istmo'))); ?></th>
                            <th class="actions col-xs-1"><?php echo __('Actions'); ?></th>
                	   </tr>
                	</thead>
                	<tbody>
                	    <tr>
                    	    <?php $base_url = array('controller' => 'Pecas', 'action' => 'index');?>
                    	    <?php echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));?>
                    	    					 <td><?php echo $this->Html->div('row',$this->Form->input('Id',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Id'),'title'=>__('Id'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Responsavel',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Responsavel'),'title'=>__('Responsavel'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Date',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Numero_Frascos',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Numero_Frascos'),'title'=>__('Numero_Frascos'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Conforme',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Conforme'),'title'=>__('Conforme'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Complexidade',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Complexidade'),'title'=>__('Complexidade'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Numero_Blocos',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Numero_Blocos'),'title'=>__('Numero_Blocos'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Nao_Conformidade',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Nao_Conformidade'),'title'=>__('Nao_Conformidade'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Falha_Identificacao',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Falha_Identificacao'),'title'=>__('Falha_Identificacao'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Pagamento',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Pagamento'),'title'=>__('Pagamento'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Material_Trocado',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Material_Trocado'),'title'=>__('Material_Trocado'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Material_Ausente',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Material_Ausente'),'title'=>__('Material_Ausente'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Removed',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Removed'),'title'=>__('Removed'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Created',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Created'),'title'=>__('Created'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Modified',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Modified'),'title'=>__('Modified'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Seccoes',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Origem_Pele',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Origem_Pele'),'title'=>__('Origem_Pele'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('FormasRecebimento_Mucosas',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('FormasRecebimento_Mucosas'),'title'=>__('FormasRecebimento_Mucosas'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('TiposCorte_Pele',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('TiposCorte_Pele'),'title'=>__('TiposCorte_Pele'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Maior',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Maior'),'title'=>__('Tamanho_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Menor',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Menor'),'title'=>__('Tamanho_Menor'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tipo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tipo'),'title'=>__('Tipo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Testiculo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Testiculo'),'title'=>__('Tamanho_Testiculo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Epididimo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Epididimo'),'title'=>__('Tamanho_Epididimo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Cordao_Espermatico',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cordao_Espermatico'),'title'=>__('Tamanho_Cordao_Espermatico'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Area_Aderencia_Face_Lateral',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Area_Aderencia_Face_Lateral'),'title'=>__('Area_Aderencia_Face_Lateral'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Cortes',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cortes'),'title'=>__('Tamanho_Cortes'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Quantidade_Linfonodos',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Linfonodos'),'title'=>__('Quantidade_Linfonodos'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Colo_Uterino',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Colo_Uterino'),'title'=>__('Tamanho_Colo_Uterino'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Cavidade_Uterina',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cavidade_Uterina'),'title'=>__('Tamanho_Cavidade_Uterina'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Endometrio',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Endometrio'),'title'=>__('Tamanho_Endometrio'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Quantidade_Nodulos',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Nodulos'),'title'=>__('Quantidade_Nodulos'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Tubas_Uterinas',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Tubas_Uterinas'),'title'=>__('Tamanho_Tubas_Uterinas'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Peso_Ovario_Esquerdo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Peso_Ovario_Esquerdo'),'title'=>__('Peso_Ovario_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Ovario_Esquerdo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Ovario_Esquerdo'),'title'=>__('Tamanho_Ovario_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Distancia_Hilo_Renal',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Hilo_Renal'),'title'=>__('Distancia_Hilo_Renal'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Segmento_Ureter',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Segmento_Ureter'),'title'=>__('Tamanho_Segmento_Ureter'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Lesao_Maior',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Maior'),'title'=>__('Tamanho_Lesao_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Lesao_Menor',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Menor'),'title'=>__('Tamanho_Lesao_Menor'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Coto_Bronquico',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Coto_Bronquico'),'title'=>__('Tamanho_Coto_Bronquico'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Distancia_Para_Coto_Bronquico',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Coto_Bronquico'),'title'=>__('Distancia_Para_Coto_Bronquico'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Distancia_Para_Pleura',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Pleura'),'title'=>__('Distancia_Para_Pleura'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Distancia_Margem_Cirurgica',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Margem_Cirurgica'),'title'=>__('Distancia_Margem_Cirurgica'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Linfonodo_Maior',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Linfonodo_Maior'),'title'=>__('Tamanho_Linfonodo_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Lobo_Esquerdo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lobo_Esquerdo'),'title'=>__('Tamanho_Lobo_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Tamanho_Istmo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Istmo'),'title'=>__('Tamanho_Istmo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
<td><?php echo $this->Form->submit(__('Search'),array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Search'),'title'=>__('Search'))) ?></td>
                            <?php echo $this->Form->end();?>
                        </tr>
                		<?php foreach ($pecas as $peca): ?>
						<tr>
						<td><?php echo h($peca['Peca']['Id']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Responsavel']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Date']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Numero_Frascos']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Conforme']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Complexidade']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Numero_Blocos']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Nao_Conformidade']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Falha_Identificacao']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Pagamento']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Material_Trocado']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Material_Ausente']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Removed']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Created']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Modified']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Seccoes']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Caracteristicas']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Origem_Pele']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['FormasRecebimento_Mucosas']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['TiposCorte_Pele']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Maior']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Menor']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Peso']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tipo']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Testiculo']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Epididimo']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Cordao_Espermatico']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Area_Aderencia_Face_Lateral']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Cortes']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Quantidade_Linfonodos']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Colo_Uterino']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Cavidade_Uterina']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Endometrio']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Quantidade_Nodulos']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Tubas_Uterinas']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Peso_Ovario_Esquerdo']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Ovario_Esquerdo']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Distancia_Hilo_Renal']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Segmento_Ureter']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Lesao_Maior']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Lesao_Menor']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Coto_Bronquico']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Distancia_Para_Coto_Bronquico']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Distancia_Para_Pleura']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Distancia_Margem_Cirurgica']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Linfonodo_Maior']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Lobo_Esquerdo']); ?>&nbsp;</td>
						<td><?php echo h($peca['Peca']['Tamanho_Istmo']); ?>&nbsp;</td>
							<td class="actions"  title='Actions' data-original-title='Actions' data-toggle="tooltip">
								<div class="pull-right">
									<div class="btn-group">
										<button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">
											<i class="fa fa-gear fa-fw"></i>
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right" role="menu">
											<li><?php echo $this->Html->link($this->Html->tag('i', __(' View'), array('class' => 'fa fa-eye fa-fw'), array('class' => 'btn btn-primary','escape' => false)), $this->Html->url(array('action' => 'view', $peca['Peca']['id'])), array('escape' => false)); ?></li>
											<li><?php echo $this->Html->link($this->Html->tag('i', __(' Edit'), array('class' => 'fa fa-edit fa-fw'), array('class' => 'btn btn-primary','escape' => false)), $this->Html->url(array('action' => 'edit', $peca['Peca']['id'])), array('escape' => false)); ?></li>
											<li><?php echo $this->Form->postLink($this->Html->tag('i', __(' Delete'), array('class' => 'fa fa-trash-o fa-fw')), array('action' => 'delete', $peca['Peca']['id']),array('escape'=>false),__('Are you sure you want to delete the %s?', $peca['Peca']['id']),array('class' => 'btn btn-mini'));?> </li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
                	</tbody>
    	       </table>
    	        <?php
                    echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
                ?>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                    <?php
						echo $this->Paginator->prev('<<', array('tag' => 'li','class' => 'prev',), $this->Paginator->link('<<', array()), array('tag' => 'li', 'escape' => false,'class' => 'prev disabled',));
						echo $this->Paginator->numbers( array( 'tag' => 'li', 'separator' => '', 'currentClass' => 'active', 'currentTag' => 'a' ) );
						echo $this->Paginator->next('>>', array('tag' => 'li','class' => 'next',), $this->Paginator->link('>>', array()), array('tag' => 'li', 'escape' => false,'class' => 'next disabled',));
					?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>