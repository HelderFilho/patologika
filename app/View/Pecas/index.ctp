
<style type="text/css">


 .Encerrado{
  background-color: midnightblue;
  color: white;
  text-align: center;
 }

 .ParaDescartar{
  background-color: blue;
  color: white;
  text-align: center;
 }

.Andamento{
  text-align: center;
}

.legenda{
color: midnightblue;
margin-left: 20px;
}
.legendafinal{
    margin-left: 30px;
    margin-right: 580px;
    color: blue;

}


</style>


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

                <?php echo $this->Form->label('LEGENDA:          '); ?>
                <?php echo $this->Form->label('Descartadas', null, array('class'=>'legenda')); ?>

                <?php echo $this->Form->label('Para descartar',null,  array('class'=>'legendafinal')); ?>

                <?php echo $this->Html->link($this->Html->tag('button', $this->Html->tag('i', '', array('class' => 'fa fa-refresh fa-fw')), array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Refresh'),'title'=>__('Refresh'),'escape' => false)), $this->Html->url(), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->tag('button', $this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')), array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Add'),'title'=>__('Add'),'escape' => false)), $this->Html->url(array('action' => 'add')), array('escape' => false)); ?>
            </section>
        </div>

        <div class="table-responsive">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid" style="margin: 20px">                 
                <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                	<thead>
                	   <tr>
                            <th><?php echo $this->Paginator->sort('Responsavel',__('Responsável'),array('data-toggle'=>'tooltip','data-original-title'=>__('Responsavel'),'title'=>__('Responsável'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Date',__('Date'),array('data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Numero_Frascos',__('Número de frascos'),array('data-toggle'=>'tooltip','data-original-title'=>__('Numero_Frascos'),'title'=>__('Número de frascos'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tipo',__('Tipo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tipo'),'title'=>__('Tipo'))); ?></th>     
                            <th><?php echo $this->Paginator->sort('Complexidade',__('Complexidade'),array('data-toggle'=>'tooltip','data-original-title'=>__('Complexidade'),'title'=>__('Complexidade'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Numero_Blocos',__('Número de blocos'),array('data-toggle'=>'tooltip','data-original-title'=>__('Numero_Blocos'),'title'=>__('Número de blocos'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Conforme',__('Conforme'),array('data-toggle'=>'tooltip','data-original-title'=>__('Conforme'),'title'=>__('Conforme'))); ?></th>
   
                     <!--       <th><?php echo $this->Paginator->sort('Nao_Conformidade',__('Não conformidade'),array('data-toggle'=>'tooltip','data-original-title'=>__('Nao_Conformidade'),'title'=>__('Não conformidade'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Falha_Identificacao',__('Falha na identificação'),array('data-toggle'=>'tooltip','data-original-title'=>__('Falha_Identificacao'),'title'=>__('Falha identificação'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Pagamento',__('Pagamento'),array('data-toggle'=>'tooltip','data-original-title'=>__('Pagamento'),'title'=>__('Pagamento'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Material_Trocado',__('Material trocado'),array('data-toggle'=>'tooltip','data-original-title'=>__('Material_Trocado'),'title'=>__('Material trocado'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Material_Ausente',__('Material ausente'),array('data-toggle'=>'tooltip','data-original-title'=>__('Material_Ausente'),'title'=>__('Material ausente'))); ?></th>
                      -->
                            <th class="actions col-xs-1"><?php echo __('Actions'); ?></th>
                	   </tr>
                	</thead>
                	<tbody>
                	    <tr>
                    	    <?php $base_url = array('controller' => 'Pecas', 'action' => 'index');?>
                    	    <?php echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));?>
     				 <td><?php echo $this->Html->div('row',$this->Form->input('Responsavel',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Responsável'),'title'=>__('Responsável'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Date',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Numero_Frascos',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Número de frascos'),'title'=>__('Número de frascos'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
				     <td><?php echo $this->Html->div('row',$this->Form->input('Tipo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tipo'),'title'=>__('Tipo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
                  	 <td><?php echo $this->Html->div('row',$this->Form->input('Complexidade',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Complexidade'),'title'=>__('Complexidade'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 <td><?php echo $this->Html->div('row',$this->Form->input('Numero_Blocos',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Número de blocos'),'title'=>__('Numero de blocos'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					 
                                          <td><?php echo $this->Html->div('row',$this->Form->input('Conforme',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Conforme'),'title'=>__('Conforme'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
                    
                       <td><?php echo $this->Form->submit(__('Search'),array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Search'),'title'=>__('Search'))) ?></td>
                            <?php echo $this->Form->end();?>
                        </tr>
                		<?php foreach ($pecas as $peca): ?>
						<tr>
					
                            <?php
                                $tempo = time() - (120*24*60*60);
                                $DataTempo = date('Y-m-d h:m:s', $tempo);
                            ?>



                            <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="Encerrado"><?php echo h($peca['Peca']['Responsavel']); ?>&nbsp;</td>
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created'] < $DataTempo){ ?> 
                    	<td class="ParaDescartar"><?php echo h($peca['Peca']['Responsavel']); ?>&nbsp;</td>
                            <?php } else { ?>
                        <td class="Andamento"><?php echo h($peca['Peca']['Responsavel']); ?>&nbsp;</td>                        
                          <?php } ?>

                       
                            <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="Encerrado"><?php echo h($peca['Peca']['Date']); ?>&nbsp;</td>
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created'] < $DataTempo){ ?> 
                        <td class="ParaDescartar"><?php echo h($peca['Peca']['Date']); ?>&nbsp;</td>
                            <?php } else { ?>
                        <td class="Andamento"><?php echo h($peca['Peca']['Date']); ?>&nbsp;</td>                        
                          <?php } ?>


                             <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="Encerrado"><?php echo h($peca['Peca']['Numero_Frascos']); ?>&nbsp;</td>
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created']<$DataTempo){ ?> 
                        <td class="ParaDescartar"><?php echo h($peca['Peca']['Numero_Frascos']); ?>&nbsp;</td>
                            <?php } else { ?>
                        <td class="Andamento"><?php echo h($peca['Peca']['Numero_Frascos']); ?>&nbsp;</td>                        
                          <?php } ?>

                
                            <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="Encerrado"><?php echo h($peca['Peca']['Tipo']); ?>&nbsp;</td>
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created']<$DataTempo){ ?> 
                        <td class="ParaDescartar"><?php echo h($peca['Peca']['Tipo']); ?>&nbsp;</td>
                            <?php } else { ?>
                        <td class="Andamento"><?php echo h($peca['Peca']['Tipo']); ?>&nbsp;</td>                        
                          <?php } ?>


                            <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="Encerrado"><?php echo h($peca['Peca']['Complexidade']); ?>&nbsp;</td>
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created']<$DataTempo){ ?> 
                        <td class="ParaDescartar"><?php echo h($peca['Peca']['Complexidade']); ?>&nbsp;</td>
                            <?php } else { ?>
                        <td class="Andamento"><?php echo h($peca['Peca']['Complexidade']); ?>&nbsp;</td>                        
                          <?php } ?>



                            <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="Encerrado"><?php echo h($peca['Peca']['Numero_Blocos']); ?>&nbsp;</td>
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created']<$DataTempo){ ?> 
                        <td class="ParaDescartar"><?php echo h($peca['Peca']['Numero_Blocos']); ?>&nbsp;</td>
                            <?php } else { ?>
                        <td class="Andamento"><?php echo h($peca['Peca']['Numero_Blocos']); ?>&nbsp;</td>                        
                          <?php } ?>


                           <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="Encerrado"><?php echo h($peca['Peca']['Conforme']); ?>&nbsp;</td>
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created']<$DataTempo){ ?> 
                        <td class="ParaDescartar"><?php echo h($peca['Peca']['Conforme']); ?>&nbsp;</td>
                            <?php } else { ?>
                        <td class="Andamento"><?php echo h($peca['Peca']['Conforme']); ?>&nbsp;</td>                        
                          <?php } ?>


                            <?php if ($peca['Peca']['Descartado']=='S'){?>
                        <td class="actions Encerrado"  title='Actions' data-original-title='Actions' data-toggle="tooltip">
                            <?php } else if ($peca['Peca']['Descartado']=='N' && $peca['Peca']['Created']<$DataTempo){ ?> 
                        <td class="actions ParaDescartar"  title='Actions' data-original-title='Actions' data-toggle="tooltip">
                            <?php } else { ?>
                        <td class="actions"  title='Actions' data-original-title='Actions' data-toggle="tooltip">
                          <?php } ?>


						


                        		<div class="pull-right">
									<div class="btn-group">
										<button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">
											<i class="fa fa-gear fa-fw"></i>
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right" role="menu">
											<li><?php echo $this->Html->link($this->Html->tag('i', __(' View'), array('class' => 'fa fa-eye fa-fw'), array('class' => 'btn btn-primary','escape' => false)), $this->Html->url(array('action' => 'view', $peca['Peca']['Id'])), array('escape' => false)); ?></li>
											<li><?php echo $this->Html->link($this->Html->tag('i', __(' Edit'), array('class' => 'fa fa-edit fa-fw'), array('class' => 'btn btn-primary','escape' => false)), $this->Html->url(array('action' => 'edit', $peca['Peca']['Id'])), array('escape' => false)); ?></li>
											<li><?php echo $this->Form->postLink($this->Html->tag('i', __(' Delete'), array('class' => 'fa fa-trash-o fa-fw')), array('action' => 'delete', $peca['Peca']['Id']),array('escape'=>false),__('Are you sure you want to delete the %s?', $peca['Peca']['Id']),array('class' => 'btn btn-mini'));?> </li>
  					                      <li><?php echo $this->Form->postLink($this->Html->tag('i', __(' Descartar'), array('class' => 'fa fa-check' )), array('action' => 'descartar', $peca['Peca']['Id']),array('escape'=>false),__('Você tem certeza que quer descartar a peca?'),array('class' => 'btn btn-mini'));?> </li>
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