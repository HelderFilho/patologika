

<section class="content-header">
    <h1>
        <?php echo __('Histologia 1'); ?>
        <small><?php echo __('All Registered'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Histologia 1'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
    
</section>
<div class="histologia1s index" style="margin: 20px" >
    <div class="panel panel-default">
        <div class="panel-heading" align="right">
            <section class="content-header">
                <?php echo $this->Html->link($this->Html->tag('button', $this->Html->tag('i', '', array('class' => 'fas fa-sync-alt')), array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Refresh'),'title'=>__('Refresh'),'escape' => false)), $this->Html->url(), array('escape' => false)); ?>
            </section>
        </div>
        <div class="table-responsive">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid" style="margin: 20px">                 
                <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                	<thead>
                	   <tr>
                            <th><?php echo $this->Paginator->sort('Nome_Paciente',__('Nome do Paciente'),array('data-toggle'=>'tooltip','data-original-title'=>__('Nome do Paciente'),'title'=>__('Nome do Paciente'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Inclusão',__('Inclusão'),array('data-toggle'=>'tooltip','data-original-title'=>__('Inclusão'),'title'=>__('Inclusão'))); ?></th>
                            <th><?php echo $this->Paginator->sort('Tipo',__('Tipo'),array('data-toggle'=>'tooltip','data-original-title'=>__('Tipo'),'title'=>__('Tipo'))); ?></th>
                         
                            <th class="actions col-xs-1"><?php echo __('Actions'); ?></th>
                	   </tr>
                	</thead>
                	<tbody>
                	    <tr>
                    	    <?php $base_url = array('controller' => 'Histologia1s', 'action' => 'index');?>
                    	    <?php echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));?>
                           <td><?php echo $this->Html->div('row',$this->Form->input('Nome_Paciente',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Nome do Paciente'),'title'=>__('Nome do Paciente'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
					       <td><?php echo $this->Html->div('row',$this->Form->input('Inclusão',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Inclusão'),'title'=>__('Inclusão'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
                           <td><?php echo $this->Html->div('row',$this->Form->input('Tipo',array('div'=>'col-xs-12','style'=>'width:100%','label'=>'','data-toggle'=>'tooltip','data-original-title'=>__('Tipo'),'title'=>__('Tipo'),'class'=>'form-control input-sm')),array('escape'=>false));?></td>
                           <td><?php echo $this->Form->submit(__('Search'),array('class' => 'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>__('Search'),'title'=>__('Search'))) ?></td>
                            <?php echo $this->Form->end();?>
                        </tr>
                		<?php foreach ($histologia1s as $histologia1): ?>
						<tr>
                        <td><?php echo h($histologia1['Histologia1']['Nome_Paciente']); ?>&nbsp;</td>
						<td><?php echo h($histologia1['Histologia1']['Inclusao']); ?>&nbsp;</td>
                        <td><?php echo h($histologia1['Histologia1']['Tipo']); ?>&nbsp;</td>
                        	<td class="actions"  title='Actions' data-original-title='Actions' data-toggle="tooltip">
								<div class="pull-right">
									<div class="btn-group">
										<button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">
											<i class="fas fa-cogs"></i>
											<span class="caret"></span>
										</button>
										  <ul class="dropdown-menu pull-right" role="menu">
                                            <li><?php echo $this->Html->link($this->Html->tag('b', __(' View'), array('class' => 'btn btn-primary','escape' => false)), $this->Html->url(array('action' => 'view', $histologia1['Histologia1']['Id'])), array('escape' => false)); ?></li>											
                                            <li><?php echo $this->Html->link($this->Html->tag('b', __(' Realizar Histologia 1'), array('class' => 'btn btn-primary','escape' => false)), $this->Html->url(array('action' => 'edit', $histologia1['Histologia1']['Id'])), array('escape' => false)); ?></li>
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