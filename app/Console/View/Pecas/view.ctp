<section class="content-header">
    <h1>
        <?php echo __('Pecas'); ?>
        <small><?php echo __('View').' '.__('Peca'); ?></small>
    </h1>
    <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Pecas'),'/Pecas');
              $this->Html->addCrumb(__('View').' '.__('Peca'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="panel panel-default" style="margin: 20px">
    <div class="panel-heading" align="right">
        <section class="content-header">
        <a href="#"><button class="btn btn-primary" title='<?=__('Back')?>' onclick='window.history.back()' data-original-title='<?=__('Back')?>' data-toggle="tooltip" type="button"><i class="fa fa-reply fa-fw"></i></button></a>
        	<a title='<?=__('Refresh')?>' data-original-title='<?=__('Refresh')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(); ?>" ><button class="btn btn-primary" type="button"><i class="fa fa-refresh fa-fw"></i></button></a>
        	<a title='<?=__('Edit')?>' data-original-title='<?=__('Edit')?>' data-toggle='tooltip' href="<?php echo $this->Html->url(array('action' => 'edit', $peca['Peca']['id'])); ?>"><button class="btn btn-primary" type="button"><i class="fa fa-edit fa-fw"></i></button></a>
        	<?php echo $this->Form->postLink('<button title='.__('Delete').' data-original-title='.__('Delete').' data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-trash-o fa-fw"></i></button>',
                                                array('action' => 'delete',  $peca['Peca']['id']),
                                                array('escape'=>false),
                                                __('Are you sure you want to delete # %s?',  $peca['Peca']['id'])
                                            );?>
        </section>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a data-toggle="tab" href="#tab_1-1" aria-expanded="false"><?=__("Peca")?></a></li>
                    <li class="pull-left header"><i class="ion ion-clipboard"></i><?=__("Data")?></li>
        </ul>
        <div class="tab-content">
          <div id="tab_1-1" class="tab-pane active">
                <div style="margin: 20px">
		<?php if($peca['Peca']['Id']){?>
		<dt><?php echo __('Id'); ?></dt>
		<dd><?php echo h($peca['Peca']['Id']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Responsavel']){?>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd><?php echo h($peca['Peca']['Responsavel']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Date']){?>
		<dt><?php echo __('Date'); ?></dt>
		<dd><?php echo h($peca['Peca']['Date']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Numero_Frascos']){?>
		<dt><?php echo __('Numero Frascos'); ?></dt>
		<dd><?php echo h($peca['Peca']['Numero_Frascos']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Conforme']){?>
		<dt><?php echo __('Conforme'); ?></dt>
		<dd><?php echo h($peca['Peca']['Conforme']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Complexidade']){?>
		<dt><?php echo __('Complexidade'); ?></dt>
		<dd><?php echo h($peca['Peca']['Complexidade']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Numero_Blocos']){?>
		<dt><?php echo __('Numero Blocos'); ?></dt>
		<dd><?php echo h($peca['Peca']['Numero_Blocos']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Nao_Conformidade']){?>
		<dt><?php echo __('Nao Conformidade'); ?></dt>
		<dd><?php echo h($peca['Peca']['Nao_Conformidade']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Falha_Identificacao']){?>
		<dt><?php echo __('Falha Identificacao'); ?></dt>
		<dd><?php echo h($peca['Peca']['Falha_Identificacao']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Pagamento']){?>
		<dt><?php echo __('Pagamento'); ?></dt>
		<dd><?php echo h($peca['Peca']['Pagamento']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Material_Trocado']){?>
		<dt><?php echo __('Material Trocado'); ?></dt>
		<dd><?php echo h($peca['Peca']['Material_Trocado']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Material_Ausente']){?>
		<dt><?php echo __('Material Ausente'); ?></dt>
		<dd><?php echo h($peca['Peca']['Material_Ausente']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Removed']){?>
		<dt><?php echo __('Removed'); ?></dt>
		<dd><?php echo h($peca['Peca']['Removed']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Created']){?>
		<dt><?php echo __('Created'); ?></dt>
		<dd><?php echo h($peca['Peca']['Created']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Modified']){?>
		<dt><?php echo __('Modified'); ?></dt>
		<dd><?php echo h($peca['Peca']['Modified']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho']){?>
		<dt><?php echo __('Tamanho'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Seccoes']){?>
		<dt><?php echo __('Seccoes'); ?></dt>
		<dd><?php echo h($peca['Peca']['Seccoes']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Caracteristicas']){?>
		<dt><?php echo __('Caracteristicas'); ?></dt>
		<dd><?php echo h($peca['Peca']['Caracteristicas']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Origem_Pele']){?>
		<dt><?php echo __('Origem Pele'); ?></dt>
		<dd><?php echo h($peca['Peca']['Origem_Pele']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['FormasRecebimento_Mucosas']){?>
		<dt><?php echo __('FormasRecebimento Mucosas'); ?></dt>
		<dd><?php echo h($peca['Peca']['FormasRecebimento_Mucosas']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['TiposCorte_Pele']){?>
		<dt><?php echo __('TiposCorte Pele'); ?></dt>
		<dd><?php echo h($peca['Peca']['TiposCorte_Pele']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Maior']){?>
		<dt><?php echo __('Tamanho Maior'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Maior']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Menor']){?>
		<dt><?php echo __('Tamanho Menor'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Menor']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Peso']){?>
		<dt><?php echo __('Peso'); ?></dt>
		<dd><?php echo h($peca['Peca']['Peso']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tipo']){?>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tipo']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Testiculo']){?>
		<dt><?php echo __('Tamanho Testiculo'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Testiculo']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Epididimo']){?>
		<dt><?php echo __('Tamanho Epididimo'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Epididimo']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Cordao_Espermatico']){?>
		<dt><?php echo __('Tamanho Cordao Espermatico'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Cordao_Espermatico']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Area_Aderencia_Face_Lateral']){?>
		<dt><?php echo __('Area Aderencia Face Lateral'); ?></dt>
		<dd><?php echo h($peca['Peca']['Area_Aderencia_Face_Lateral']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Cortes']){?>
		<dt><?php echo __('Tamanho Cortes'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Cortes']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Quantidade_Linfonodos']){?>
		<dt><?php echo __('Quantidade Linfonodos'); ?></dt>
		<dd><?php echo h($peca['Peca']['Quantidade_Linfonodos']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Colo_Uterino']){?>
		<dt><?php echo __('Tamanho Colo Uterino'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Colo_Uterino']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Cavidade_Uterina']){?>
		<dt><?php echo __('Tamanho Cavidade Uterina'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Cavidade_Uterina']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Endometrio']){?>
		<dt><?php echo __('Tamanho Endometrio'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Endometrio']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Quantidade_Nodulos']){?>
		<dt><?php echo __('Quantidade Nodulos'); ?></dt>
		<dd><?php echo h($peca['Peca']['Quantidade_Nodulos']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Tubas_Uterinas']){?>
		<dt><?php echo __('Tamanho Tubas Uterinas'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Tubas_Uterinas']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Peso_Ovario_Esquerdo']){?>
		<dt><?php echo __('Peso Ovario Esquerdo'); ?></dt>
		<dd><?php echo h($peca['Peca']['Peso_Ovario_Esquerdo']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Ovario_Esquerdo']){?>
		<dt><?php echo __('Tamanho Ovario Esquerdo'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Ovario_Esquerdo']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Distancia_Hilo_Renal']){?>
		<dt><?php echo __('Distancia Hilo Renal'); ?></dt>
		<dd><?php echo h($peca['Peca']['Distancia_Hilo_Renal']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Segmento_Ureter']){?>
		<dt><?php echo __('Tamanho Segmento Ureter'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Segmento_Ureter']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Lesao_Maior']){?>
		<dt><?php echo __('Tamanho Lesao Maior'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Lesao_Maior']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Lesao_Menor']){?>
		<dt><?php echo __('Tamanho Lesao Menor'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Lesao_Menor']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Coto_Bronquico']){?>
		<dt><?php echo __('Tamanho Coto Bronquico'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Coto_Bronquico']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Distancia_Para_Coto_Bronquico']){?>
		<dt><?php echo __('Distancia Para Coto Bronquico'); ?></dt>
		<dd><?php echo h($peca['Peca']['Distancia_Para_Coto_Bronquico']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Distancia_Para_Pleura']){?>
		<dt><?php echo __('Distancia Para Pleura'); ?></dt>
		<dd><?php echo h($peca['Peca']['Distancia_Para_Pleura']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Distancia_Margem_Cirurgica']){?>
		<dt><?php echo __('Distancia Margem Cirurgica'); ?></dt>
		<dd><?php echo h($peca['Peca']['Distancia_Margem_Cirurgica']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Linfonodo_Maior']){?>
		<dt><?php echo __('Tamanho Linfonodo Maior'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Linfonodo_Maior']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Lobo_Esquerdo']){?>
		<dt><?php echo __('Tamanho Lobo Esquerdo'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Lobo_Esquerdo']); ?></dd>
		<?php }?>
		<?php if($peca['Peca']['Tamanho_Istmo']){?>
		<dt><?php echo __('Tamanho Istmo'); ?></dt>
		<dd><?php echo h($peca['Peca']['Tamanho_Istmo']); ?></dd>
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