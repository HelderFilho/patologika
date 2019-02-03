<section class="content-header">
    <h1>
        <?php echo __('Histologia1s'); ?>
        <small><?php echo __('View').' '.__('Histologia1'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Histologia1s'),'/Histologia1s');
              $this->Html->addCrumb(__('View').' '.__('Histologia1'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $histologia1['Histologia1']['Id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $histologia1['Histologia1']['Id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $histologia1['Histologia1']['Id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Histologia1")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($histologia1['Histologia1']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($histologia1['Histologia1']['Id']); ?></dd>
		<?php }?>
		<?php if($histologia1['Histologia1']['Inclusão']){?>
		<dt><?php echo __('Inclusão'); ?></dt>
		<dd><?php echo h($histologia1['Histologia1']['Inclusão']); ?></dd>
		<?php }?>
		<?php if($histologia1['Histologia1']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($histologia1['Histologia1']['Removed']); ?></dd>
		<?php }?>
		<?php if($histologia1['Histologia1']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($histologia1['Histologia1']['Created']); ?></dd>
		<?php }?>
		<?php if($histologia1['Histologia1']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($histologia1['Histologia1']['Modified']); ?></dd>
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