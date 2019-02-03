<section class="content-header">
    <h1>
        <?php echo __('Histologia3s'); ?>
        <small><?php echo __('View').' '.__('Histologia3'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Histologia3s'),'/Histologia3s');
              $this->Html->addCrumb(__('View').' '.__('Histologia3'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $histologia3['Histologia3']['Id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $histologia3['Histologia3']['Id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $histologia3['Histologia3']['Id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Histologia3")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($histologia3['Histologia3']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Id']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Inclusaio']){?>
		<dt><?php echo __('Inclusaio'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Inclusaio']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Corte']){?>
		<dt><?php echo __('Corte'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Corte']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Etiquetagem']){?>
		<dt><?php echo __('Etiquetagem'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Etiquetagem']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Coloracao']){?>
		<dt><?php echo __('Coloracao'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Coloracao']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Arquivamento']){?>
		<dt><?php echo __('Arquivamento'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Arquivamento']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Removed']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Created']); ?></dd>
		<?php }?>
		<?php if($histologia3['Histologia3']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($histologia3['Histologia3']['Modified']); ?></dd>
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