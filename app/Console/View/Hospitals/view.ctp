<section class="content-header">
    <h1>
        <?php echo __('Hospitals'); ?>
        <small><?php echo __('View').' '.__('Hospital'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Hospitals'),'/Hospitals');
              $this->Html->addCrumb(__('View').' '.__('Hospital'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $hospital['Hospital']['id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $hospital['Hospital']['id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $hospital['Hospital']['id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Hospital")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($hospital['Hospital']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Id']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Nome']){?>
		<dt><?php echo __('Nome'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Nome']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Endereco']){?>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Endereco']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Telefone']){?>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Telefone']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Email']){?>
		<dt><?php echo __('Email'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Email']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Responsavel']){?>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Responsavel']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Removed']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Created']); ?></dd>
		<?php }?>
		<?php if($hospital['Hospital']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($hospital['Hospital']['Modified']); ?></dd>
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