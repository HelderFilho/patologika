<section class="content-header">
    <h1>
        <?php echo __('Pecas'); ?>
        <small><?php echo __('Edit').' '.__('Peca'); ?></small>
    </h1>
     <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Pecas'),'/Pecas');
              $this->Html->addCrumb(__('Edit').' '.__('Peca'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="pecas form" style="margin: 20px" >
<?php echo $this->Form->create('Peca'); ?>
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
					 echo $this->Html->div('row',$this->Form->input('Id',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Id'),'title'=>__('Id'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Responsavel',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Responsavel'),'title'=>__('Responsavel'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('Date',array('id'=>'Date','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Numero_Frascos',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Numero_Frascos'),'title'=>__('Numero_Frascos'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Conforme',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Conforme'),'title'=>__('Conforme'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Complexidade',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Complexidade'),'title'=>__('Complexidade'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Numero_Blocos',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Numero_Blocos'),'title'=>__('Numero_Blocos'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Nao_Conformidade',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Nao_Conformidade'),'title'=>__('Nao_Conformidade'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Falha_Identificacao',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Falha_Identificacao'),'title'=>__('Falha_Identificacao'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Pagamento',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Pagamento'),'title'=>__('Pagamento'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Material_Trocado',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Material_Trocado'),'title'=>__('Material_Trocado'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Material_Ausente',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Material_Ausente'),'title'=>__('Material_Ausente'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Removed',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Removed'),'title'=>__('Removed'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('Created',array('id'=>'Created','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Created'),'title'=>__('Created'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('Modified',array('id'=>'Modified','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Modified'),'title'=>__('Modified'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho'),'title'=>__('Tamanho'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Seccoes',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Seccoes'),'title'=>__('Seccoes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Caracteristicas',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Caracteristicas'),'title'=>__('Caracteristicas'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Origem_Pele',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Origem_Pele'),'title'=>__('Origem_Pele'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('FormasRecebimento_Mucosas',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('FormasRecebimento_Mucosas'),'title'=>__('FormasRecebimento_Mucosas'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('TiposCorte_Pele',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('TiposCorte_Pele'),'title'=>__('TiposCorte_Pele'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Maior',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Maior'),'title'=>__('Tamanho_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Menor',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Menor'),'title'=>__('Tamanho_Menor'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso'),'title'=>__('Peso'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tipo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tipo'),'title'=>__('Tipo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Testiculo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Testiculo'),'title'=>__('Tamanho_Testiculo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Epididimo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Epididimo'),'title'=>__('Tamanho_Epididimo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Cordao_Espermatico',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cordao_Espermatico'),'title'=>__('Tamanho_Cordao_Espermatico'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Area_Aderencia_Face_Lateral',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Area_Aderencia_Face_Lateral'),'title'=>__('Area_Aderencia_Face_Lateral'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Cortes',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cortes'),'title'=>__('Tamanho_Cortes'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Quantidade_Linfonodos',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Linfonodos'),'title'=>__('Quantidade_Linfonodos'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Colo_Uterino',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Colo_Uterino'),'title'=>__('Tamanho_Colo_Uterino'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Cavidade_Uterina',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Cavidade_Uterina'),'title'=>__('Tamanho_Cavidade_Uterina'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Endometrio',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Endometrio'),'title'=>__('Tamanho_Endometrio'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Quantidade_Nodulos',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Quantidade_Nodulos'),'title'=>__('Quantidade_Nodulos'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Tubas_Uterinas',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Tubas_Uterinas'),'title'=>__('Tamanho_Tubas_Uterinas'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Peso_Ovario_Esquerdo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Peso_Ovario_Esquerdo'),'title'=>__('Peso_Ovario_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Ovario_Esquerdo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Ovario_Esquerdo'),'title'=>__('Tamanho_Ovario_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Hilo_Renal',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Hilo_Renal'),'title'=>__('Distancia_Hilo_Renal'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Segmento_Ureter',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Segmento_Ureter'),'title'=>__('Tamanho_Segmento_Ureter'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Lesao_Maior',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Maior'),'title'=>__('Tamanho_Lesao_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Lesao_Menor',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lesao_Menor'),'title'=>__('Tamanho_Lesao_Menor'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Coto_Bronquico',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Coto_Bronquico'),'title'=>__('Tamanho_Coto_Bronquico'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Para_Coto_Bronquico',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Coto_Bronquico'),'title'=>__('Distancia_Para_Coto_Bronquico'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Para_Pleura',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Para_Pleura'),'title'=>__('Distancia_Para_Pleura'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Distancia_Margem_Cirurgica',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Distancia_Margem_Cirurgica'),'title'=>__('Distancia_Margem_Cirurgica'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Linfonodo_Maior',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Linfonodo_Maior'),'title'=>__('Tamanho_Linfonodo_Maior'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Lobo_Esquerdo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Lobo_Esquerdo'),'title'=>__('Tamanho_Lobo_Esquerdo'),'class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('Tamanho_Istmo',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Tamanho_Istmo'),'title'=>__('Tamanho_Istmo'),'class'=>'form-control input-sm')),array('escape'=>false));
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
                        locale: 'pt',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script><script>
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