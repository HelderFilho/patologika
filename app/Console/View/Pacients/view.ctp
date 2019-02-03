<section class="content-header">
    <h1>
        <?php echo __('Pacients'); ?>
        <small><?php echo __('View').' '.__('Pacient'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Pacients'),'/Pacients');
              $this->Html->addCrumb(__('View').' '.__('Pacient'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $pacient['Pacient']['Id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $pacient['Pacient']['Id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $pacient['Pacient']['Id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Pacient")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($pacient['Pacient']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Id']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Nome']){?>
		<dt><?php echo __('Nome'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Nome']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Endereco']){?>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Endereco']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Sexo']){?>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Sexo']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Data_Nascimento']){?>
		<dt><?php echo __('Data Nascimento'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Data_Nascimento']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Telefone']){?>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Telefone']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Email']){?>
		<dt><?php echo __('Email'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Email']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['RG']){?>
		<dt><?php echo __('RG'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['RG']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['CPF']){?>
		<dt><?php echo __('CPF'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['CPF']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Nome_Responsavel']){?>
		<dt><?php echo __('Nome Responsavel'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Nome_Responsavel']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Telefone_Responsavel']){?>
		<dt><?php echo __('Telefone Responsavel'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Telefone_Responsavel']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Informacoes_Extras']){?>
		<dt><?php echo __('Informacoes Extras'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Informacoes_Extras']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Removed']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Created']); ?></dd>
		<?php }?>
		<?php if($pacient['Pacient']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($pacient['Pacient']['Modified']); ?></dd>
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