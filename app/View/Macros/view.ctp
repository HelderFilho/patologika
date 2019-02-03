<section class="content-header">
    <h1>
        <?php echo __('Macros'); ?>
        <small><?php echo __('View').' '.__('Macro'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Macros'),'/Macros');
              $this->Html->addCrumb(__('View').' '.__('Macro'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $macro['Macro']['Id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $macro['Macro']['Id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $macro['Macro']['Id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Macro")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($macro['Macro']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($macro['Macro']['Id']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Tamanho']){?>
		<dt><?php echo __('Tamanho'); ?></dt>
		<dd><?php echo h($macro['Macro']['Tamanho']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Forma']){?>
		<dt><?php echo __('Forma'); ?></dt>
		<dd><?php echo h($macro['Macro']['Forma']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Cor']){?>
		<dt><?php echo __('Cor'); ?></dt>
		<dd><?php echo h($macro['Macro']['Cor']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Consistencia']){?>
		<dt><?php echo __('Consistencia'); ?></dt>
		<dd><?php echo h($macro['Macro']['Consistencia']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Fragmentos']){?>
		<dt><?php echo __('Fragmentos'); ?></dt>
		<dd><?php echo h($macro['Macro']['Fragmentos']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Cassetes']){?>
		<dt><?php echo __('Cassetes'); ?></dt>
		<dd><?php echo h($macro['Macro']['Cassetes']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($macro['Macro']['Removed']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($macro['Macro']['Created']); ?></dd>
		<?php }?>
		<?php if($macro['Macro']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($macro['Macro']['Modified']); ?></dd>
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