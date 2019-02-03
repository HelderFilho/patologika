<section class="content-header">
    <h1>
        <?php echo __('Slides'); ?>
        <small><?php echo __('View').' '.__('Slide'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Slides'),'/Slides');
              $this->Html->addCrumb(__('View').' '.__('Slide'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $slide['Slide']['id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $slide['Slide']['id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $slide['Slide']['id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Slide")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($slide['Slide']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($slide['Slide']['Id']); ?></dd>
		<?php }?>
		<?php if($slide['Slide']['Responsavel']){?>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd><?php echo h($slide['Slide']['Responsavel']); ?></dd>
		<?php }?>
		<?php if($slide['Slide']['Data']){?>
		<dt><?php echo __('Data'); ?></dt>
		<dd><?php echo h($slide['Slide']['Data']); ?></dd>
		<?php }?>
		<?php if($slide['Slide']['Numero_Lâminas']){?>
		<dt><?php echo __('Numero Lâminas'); ?></dt>
		<dd><?php echo h($slide['Slide']['Numero_Lâminas']); ?></dd>
		<?php }?>
		<?php if($slide['Slide']['Conforme']){?>
		<dt><?php echo __('Conforme'); ?></dt>
		<dd><?php echo h($slide['Slide']['Conforme']); ?></dd>
		<?php }?>
		<?php if($slide['Slide']['Motivos_Conformidade']){?>
		<dt><?php echo __('Motivos Conformidade'); ?></dt>
		<dd><?php echo h($slide['Slide']['Motivos_Conformidade']); ?></dd>
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