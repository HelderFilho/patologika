<section class="content-header">
    <h1>
        <?php echo __('Histologia3s'); ?>
        <small><?php echo __('Edit').' '.__('Histologia3'); ?></small>
    </h1>
     <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Histologia3s'),'/Histologia3s');
              $this->Html->addCrumb(__('Edit').' '.__('Histologia3'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="histologia3s form" style="margin: 20px" >
<?php echo $this->Form->create('Histologia3'); ?>
    <fieldset>
        <div class="panel panel-default">
            <div class="panel-heading" align="right">
                <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
                <a href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle="tooltip" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
            </div>
            <div class="row">
                <div class="div'=>'col-sm-12 col-md-7 col-xs-12">
                    <div style="margin: 20px">
                        <?php
					 echo $this->Html->div('row',$this->Form->hidden('Id',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Id'),'title'=>__('Id'),'class'=>'form-control input-sm')),array('escape'=>false));
				     echo $this->Html->div('row',$this->Form->input('Nome_Paciente',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Nome do Paciente'),'title'=>__('Nome do Paciente'),'class'=>'form-control input-sm')),array('escape'=>false));
                	 echo $this->Html->div('row',$this->Form->hidden('Inclusao',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Inclusaio'),'title'=>__('Inclusaio'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->hidden('Corte',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Corte'),'title'=>__('Corte'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->hidden('Etiquetagem',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Etiquetagem'),'title'=>__('Etiquetagem'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Coloracao',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Coloracao'),'title'=>__('Coloracao'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Arquivamento',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Arquivamento'),'title'=>__('Arquivamento'),'class'=>'form-control input-sm')),array('escape'=>false));
                     echo $this->Html->div('row',$this->Form->hidden('Numero_Blocos',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Nome do Paciente'),'title'=>__('Nome do Paciente'),'class'=>'form-control input-sm')),array('escape'=>false));
                     echo $this->Html->div('row',$this->Form->hidden('Numero_Frascos',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Nome do Paciente'),'title'=>__('Nome do Paciente'),'class'=>'form-control input-sm')),array('escape'=>false));
                     echo $this->Html->div('row',$this->Form->hidden('Tipo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Nome do Paciente'),'title'=>__('Nome do Paciente'),'class'=>'form-control input-sm')),array('escape'=>false));

                	 echo $this->Html->div('row',$this->Form->hidden('Removed',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Removed'),'title'=>__('Removed'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->hidden('Created',array('id'=>'Created','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Created'),'title'=>__('Created'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->hidden('Modified',array('id'=>'Modified','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Modified'),'title'=>__('Modified'),'class'=>'form-control input-sm')),array('escape'=>false));
				?>
                    </div>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <td style="padding: 15px" ><button class="btn btn-primary" title='<?=__('Confirm')?>' data-original-title='<?=__('Confirm')?>' data-toggle="tooltip" type="submit"><i class="fa fa-check fa-fw"></i> <?=__('Confirm')?></button></td>
                <td><a href="<?=$this->Html->url(array('action' => 'index'));?>"><button title='<?=__('Cancel')?>' data-original-title='<?=__('Cancel')?>' data-toggle="tooltip" class="btn btn-primary" type="button"><i class="fa fa-close fa-fw"></i><?=__('Cancel')?></button></a></td>
            </tr>
        </table>
	</fieldset>
</div>
<script>
    $(function () {
                    $('#Created').datetimepicker({
                        locale: 'pt',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script><script>
    $(function () {
                    $('#Modified').datetimepicker({
                        locale: 'pt',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script>