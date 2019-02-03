<section class="content-header">
    <h1>
        <?php echo __('Medics'); ?>
        <small><?php echo __('View').' '.__('Medic'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Medics'),'/Medics');
              $this->Html->addCrumb(__('View').' '.__('Medic'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $medic['Medic']['Id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $medic['Medic']['Id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $medic['Medic']['Id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Medic")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
	<!--	<?php if($medic['Medic']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($medic['Medic']['Id']); ?></dd>
		<?php }?> -->
		<?php if($medic['Medic']['Nome']){?>
		<dt><?php echo __('Nome'); ?></dt>
		<dd><?php echo h($medic['Medic']['Nome']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['Endereco']){?>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd><?php echo h($medic['Medic']['Endereco']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['Telefone']){?>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd><?php echo h($medic['Medic']['Telefone']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['Email']){?>
		<dt><?php echo __('Email'); ?></dt>
		<dd><?php echo h($medic['Medic']['Email']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['RG']){?>
		<dt><?php echo __('RG'); ?></dt>
		<dd><?php echo h($medic['Medic']['RG']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['CPF']){?>
		<dt><?php echo __('CPF'); ?></dt>
		<dd><?php echo h($medic['Medic']['CPF']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['CRM']){?>
		<dt><?php echo __('CRM'); ?></dt>
		<dd><?php echo h($medic['Medic']['CRM']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['Especializacao']){?>
		<dt><?php echo __('Especializacao'); ?></dt>
		<dd><?php echo h($medic['Medic']['Especializacao']); ?></dd>
		<?php }?>
	<!--	<?php if($medic['Medic']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($medic['Medic']['Removed']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($medic['Medic']['Created']); ?></dd>
		<?php }?>
		<?php if($medic['Medic']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($medic['Medic']['Modified']); ?></dd>
		<?php }?> -->
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