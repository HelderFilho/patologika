<?php 
echo $this->Html->css('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); 
echo $this->Html->script('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');
?><section class="content-header">
    <h1>
        <?php echo __('Accept Terms'); ?>
        <small><?php echo __('Edit').' '.__('Accept Term'); ?></small>
    </h1>
     <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Accept Terms'),'/Accept Terms');
              $this->Html->addCrumb(__('Edit').' '.__('Accept Term'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="acceptTerms form" style="margin: 20px" >
<?php echo $this->Form->create('AcceptTerm'); ?>
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
					 echo $this->Html->div('row',$this->Form->input('id',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('id'),'title'=>__('id'),'class'=>'form-control input-sm')),array('escape'=>false));
					$options = array('S' => __('Active'),'N' => __('Inactive'));
					?><div data-original-title='<?=__('active')?>' data-toggle="tooltip"><?php echo $this->Html->div('row',$this->Form->input('active',array('div'=>'col-xs-12','type'=>'select','class'=>'form-control input-sm selectpicker','data-style'=>'btn-primary','data-live-search'=>'true','options' => $options,'default'=>'S')),array('escape'=>false));?></div>
<?php					echo $this->Html->div('row',$this->Form->input('removed',array('value'=>'N','type'=>'hidden','div'=>'col-xs-12','class'=>'form-control input-sm')),array('escape'=>false));
					 echo $this->Html->div('row',$this->Form->input('name',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('name'),'title'=>__('name'),'class'=>'form-control input-sm')),array('escape'=>false));
					echo $this->Html->div('row',$this->Form->input('description',array('id'=>'description','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('description'),'title'=>__('description'),'class'=>'form-control input-sm')),array('escape'=>false));
							?><div data-original-title='<?=__('prefecture_id')?>' data-toggle="tooltip">
			<?php echo $this->Html->div('row',$this->Form->input('prefecture_id',array('div'=>'col-xs-12','class'=>'form-control input-sm selectpicker','data-style'=>'btn-primary','data-live-search'=>'true','style'=>'width:100%','empty' => __('prefecture_id'))),array('escape'=>false)); ?>
		</div><?php
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
                    $('#description').wysihtml5();
</script>