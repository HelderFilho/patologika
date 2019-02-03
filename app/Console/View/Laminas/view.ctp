<section class="content-header">
    <h1>
        <?php echo __('Laminas'); ?>
        <small><?php echo __('View').' '.__('Lamina'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Laminas'),'/Laminas');
              $this->Html->addCrumb(__('View').' '.__('Lamina'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $lamina['Lamina']['id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $lamina['Lamina']['id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $lamina['Lamina']['id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Lamina")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($lamina['Lamina']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Id']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Responsavel']){?>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Responsavel']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Date']){?>
		<dt><?php echo __('Date'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Date']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Numero_Lâminas']){?>
		<dt><?php echo __('Numero Lâminas'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Numero_Lâminas']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Conforme']){?>
		<dt><?php echo __('Conforme'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Conforme']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Motivos_Conformidade']){?>
		<dt><?php echo __('Motivos Conformidade'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Motivos_Conformidade']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Falha_Identificacao']){?>
		<dt><?php echo __('Falha Identificacao'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Falha_Identificacao']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Pagamento']){?>
		<dt><?php echo __('Pagamento'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Pagamento']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Material_Trocado']){?>
		<dt><?php echo __('Material Trocado'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Material_Trocado']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Material_Ausente']){?>
		<dt><?php echo __('Material Ausente'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Material_Ausente']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Removed']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Created']); ?></dd>
		<?php }?>
		<?php if($lamina['Lamina']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($lamina['Lamina']['Modified']); ?></dd>
		<?php }?>
                </div>
            </div>
                        </div>
        </div>
     </div>|

<script>
    $.extend( $.fn.dataTable.defaults, {
        "searching": false
    } );
    
    $('#dataTables-example').DataTable();
</script>