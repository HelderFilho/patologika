<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?= $this->Html->script('jpeg_camera_with_dependencies.min.js') ?>

<section class="content-header">
    <h1>
        <?php echo __('Laminas'); ?>
        <small><?php echo __('Add').' '.__('Lamina'); ?></small>
    </h1>
     <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Laminas'),'/Laminas');
              $this->Html->addCrumb(__('Add').' '.__('Lamina'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="laminas form" style="margin: 20px" >
<?php echo $this->Form->create('Lamina'); ?>
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
                echo $this->Html->div('row',$this->Form->input('Responsavel',
                    array('label'=>'Responsável',
                            'div'=>'col-xs-12',
                            'data-toggle'=>'tooltip',
                            'data-original-title'=>__('Responsável'),
                            'title'=>__('Responsável'),
                            'options'=> array('Helder Filho' => 'Helder Filho','Luana Cardoso'=>'Luana Cardoso','Airton Cesar'=>'Airton Cesar' ),
                            'empty'=>'Escolha',
                            'class'=>'form-control')),
                    array('escape'=>false));					 echo $this->Html->div('row',$this->Form->input('Date',array('id'=>'Date','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'),'class'=>'form-control input-sm')),array('escape'=>false));

                echo $this->Html->div('row',$this->Form->input('Numero_Laminas',array(
                        'label'=>'Número de Lâminas', 
                        'options'=>$quantidade,
                        'div'=>'col-xs-12',
                        'id'=>'frascos',
                        'data-toggle'=>'tooltip',
                        'data-original-title'=>__('Numero_Laminas'),
                        'title'=>__('Numero_Laminas'),
                        'class'=>'form-control')),
                         array('escape'=>false));
                                    
                     echo $this->Html->div('row',$this->Form->input('Numero_Frascos',array(
                        'label'=>'Número de Frascos', 
                        'options'=>$quantidade,
                        'div'=>'col-xs-12',
                        'id'=>'frascos',
                        'data-toggle'=>'tooltip',
                        'data-original-title'=>__('Numero_Frascos'),
                        'title'=>__('Numero_Frascos'),
                        'class'=>'form-control')),
                         array('escape'=>false));
   					 echo $this->Html->div('row',$this->Form->input('Conforme',
                                                            				     array('div'=>'col-xs-12',
                                                            				     'data-toggle'=>'tooltip',
                                                            				     'data-original-title'=>__('Conforme'),
                                                            				     'title'=>__('Conforme'),
                                                            				     'class'=>'form-control input-sm',
                                                            				     'checked',
                                                            				     'id'=>'Conforme_Check',
                                                            				     'onchange'=>'ShowHide()',
                                                            				     'value'=>'Sim',
                                                            				     'hiddenField'=>'Não',
                                                            				      'type' => 'checkbox')));
					?>

					 <div id="Inconformidade" hidden>
                         <?php
					 echo $this->Html->div('row',$this->Form->input('Motivos_Conformidade',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Motivos_Conformidade'),'title'=>__('Motivos_Conformidade'),'class'=>'form-control input-sm')),array('escape'=>false));
                	echo $this->Html->div('row',$this->Form->input('Falha_Identificacao',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Falha_Identificacao'),'id'=>'Falha_Identificacao','title'=>__('Falha_Identificacao'),'class'=>'form-control input-sm')),array('escape'=>false));
                    echo $this->Html->div('row',$this->Form->input('Pagamento',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Pagamento'),'id'=>'Pagamento','title'=>__('Pagamento'),'class'=>'form-control input-sm')),array('escape'=>false));
                	echo $this->Html->div('row',$this->Form->input('Material_Trocado',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Material_Trocado'),'id'=>'Material_Trocado','title'=>__('Material_Trocado'),'class'=>'form-control input-sm')),array('escape'=>false));
                	echo $this->Html->div('row',$this->Form->input('Material_Ausente',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Material_Ausente'),'id'=>'Material_Ausente','title'=>__('Material_Ausente'),'class'=>'form-control input-sm')),array('escape'=>false));
                       				    	?>
                     </div>
                        <?php
                     echo $this->Html->div('row',$this->Form->hidden('Removed',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Removed'),'value'=>'N','title'=>__('Removed'),'class'=>'form-control input-sm')),array('escape'=>false));
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
                    $('#Date').datetimepicker({
                        locale: 'pt-br',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script><script>
    $(function () {
                    $('#Created').datetimepicker({
                        locale: 'pt-br',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script><script>
    $(function () {
                    $('#Modified').datetimepicker({
                         locale: 'pt-br',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script>


<script>
    function ShowHide (){
        if (document.getElementById('Conforme_Check').checked==true){
            document.getElementById('Inconformidade').style.display='none';

        }
        else{
            document.getElementById('Inconformidade').style.display='block';
            document.getElementById('Nao_Conformidade').value='';
            document.getElementById('Falha_Identificacao').value='';
            document.getElementById('Pagamento').value='';
            document.getElementById('Material_Trocado').value='';
            document.getElementById('Material_Ausente').value='';

        }
    return
  }
</script>

