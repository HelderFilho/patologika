<section class="content-header">
    <h1>
        <?php echo __('Pre Confs'); ?>
        <small><?php echo __('View').' '.__('Pre Conf'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Pre Confs'),'/Pre Confs');
              $this->Html->addCrumb(__('View').' '.__('Pre Conf'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $preConf['PreConf']['Id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $preConf['PreConf']['Id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $preConf['PreConf']['Id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Pre Conf")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($preConf['PreConf']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Id']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Responsavel']){?>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Responsavel']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Nome_Paciente']){?>
		<dt><?php echo __('Nome Paciente'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Nome_Paciente']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Tipo']){?>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Tipo']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Numero_Frascos']){?>
		<dt><?php echo __('Numero Frascos'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Numero_Frascos']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Numero_Blocos']){?>
		<dt><?php echo __('Numero Blocos'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Numero_Blocos']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Removed']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Created']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Modified']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Data_Descarte']){?>
		<dt><?php echo __('Data Descarte'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Data_Descarte']); ?></dd>
		<?php }?>
		<?php if($preConf['PreConf']['Conforme']){?>
		<dt><?php echo __('Conforme'); ?></dt>
		<dd><?php echo h($preConf['PreConf']['Conforme']); ?></dd>
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