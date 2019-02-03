<style type="text/css"> 
.paddingButton {
margin-top: 35px;
  width:120px;
height: 35px;
text-align: center;
background-color: darkcyan;
color: white;
}
</style>

    <?= $this->Html->script('webcam.js') ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php $this->assign('title',$title); ?>

<section class="content-header">
    <h1>
        <?php echo __('Pré-Conferência'); ?>
    </h1>
     <?php  $this->Html->addCrumb(__(' Home'), '/',['i','class'=>'fa fa-dashboard']);
            $this->Html->addCrumb(__('Pré-Conferência'),'/Pecas');
              $this->Html->addCrumb(__('Pré-Conferência'));
            echo $this->Html->getCrumbList(['class'=>'breadcrumb','lastClass'=>'active']);?>
</section>
<div class="pecas form" style="margin: 20px" >
<?php echo $this->Form->create('PreConf', array('type'=>'file')); ?>
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
                    echo $this->Html->div('row',$this->Form->hidden('Foto',array('id'=>'Foto', 'div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Material_Ausente'),'title'=>__('Material_Ausente'),'class'=>'form-control input-sm')),array('escape'=>false));

                    echo $this->Html->div('row',$this->Form->input('Responsavel', array('label'=>'Responsável', 'div'=>'col-xs-12','data-toggle'=>'tooltip','value'=>$this->Session->read('Auth.User.name'),'class'=>'form-control input-sm')), array('escape'=>false));
                    
            /*      array('label'=>'Responsável',
                            'div'=>'col-xs-12',
                            'data-toggle'=>'tooltip',
                            'data-original-title'=>__('Responsável'),
                            'title'=>__('Responsável'),
                            'options'=> array('Helder Filho' => 'Helder Filho','Luana Cardoso'=>'Luana Cardoso','Airton Cesar'=>'Airton Cesar' ),
                            'empty'=>'Escolha',
                            'class'=>'form-control')),
                    array('escape'=>false));
*/
                ?>
<?php


                    echo $this->Html->div('row',$this->Form->input('Nome_Paciente',array('label'=>'Nome do Paciente','id'=>'Nome', 'div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Nome do Paciente'),'title'=>__('Nome do Paciente'),'class'=>'form-control input-sm')),array('escape'=>false));



                    echo $this->Html->div('row',$this->Form->input('Tipo',
                     array('label'=>'Tipo',
                     'div'=>'col-xs-12',
                     'data-toggle'=>'tooltip',
                     'options' => array(
                     'Biopsia'=>'Biópia/Peça', 
                     'Citologia_Liquidos'=>'Citologia de líquidos',
                     'Citologia_Puncao'=>'Citologia de punção',
                     'Citologia_Cervico_Vaginal'=>'Citologia Cervico Vaginal',
                     'Congelacao'=>'Congelação'),
                     'empty'=>'Escolha',
                     'onchange'=>'ShowSelect()',
                     'data-original-title'=>__('Tipo'),
                     'title'=>__('Tipo'),
                     'id'=>'Tipo',
                     'type'=>'select',
                     'class'=>'form-control')));                    

                    
                     echo $this->Html->div('row',$this->Form->input('Fotos',array('type'=>'file', 'id'=>'fotos','label'=>'Fotos','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Fotos'),'title'=>__('Fotos'),'class'=>'form-control input-sm file')),array('escape'=>false));
                     echo $this->Html->div('row',$this->Form->input('Videos',array('type'=>'file', 'id'=>'videos','label'=>'Videos','div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Videos'),'title'=>__('Videos'),'class'=>'form-control input-sm file')),array('escape'=>false));






                    ?>
                    
        
            <?php       
                    echo $this->Html->div('row',$this->Form->hidden('Removed',array('div'=>'col-xs-12','data-toggle'=>'tooltip','data-original-title'=>__('Removed'),'value'=>'N','title'=>__('Removed'),'class'=>'form-control input-sm')),array('escape'=>false));
                    echo $this->Html->div('row',$this->Form->hidden('Created',array('id'=>'Created','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Created'),'title'=>__('Created'),'class'=>'form-control input-sm')),array('escape'=>false));
                    echo $this->Html->div('row',$this->Form->hidden('Modified',array('id'=>'Modified','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Modified'),'title'=>__('Modified'),'class'=>'form-control input-sm')),array('escape'=>false));
                    
            ?>
            
            <div id='Frascos' hidden>
            <?php echo $this->Html->div('row',$this->Form->input('Numero_Frascos',array(
                        'label'=>'Número de Frascos', 
                        'options'=>$quantidade,
                        'div'=>'col-xs-12',
                        'id'=>'frascos',
                        'data-toggle'=>'tooltip',
                        'data-original-title'=>__('Numero_Frascos'),
                        'title'=>__('Numero_Frascos'),
                        'class'=>'form-control')),
                    array('escape'=>false));
                    ?>
                
            </div>

            <div id='Blocos' hidden>
                <?php echo $this->Html->div('row',$this->Form->input('Numero_Blocos',array(
                        'label'=>'Quantidade de Blocos',
                        'options'=>$quantidade,
                        'min'=>'0',
                        'div'=>'col-xs-12',
                        'data-toggle'=>'tooltip',
                        'data-original-title'=>__('Numero_Blocos'),
                        'title'=>__('Numero_Blocos'),
                        'class'=>'form-control')),
                    array('escape'=>false)); ?>
            </div> 
                
              <?php
                echo $this->Html->div('row',$this->Form->input('Data_Descarte',array('label'=>'Data prevista para o descarte','id'=>'Date','div'=>'col-xs-12 datetimepicker','type'=>'text','data-toggle'=>'tooltip','data-original-title'=>__('Date'),'title'=>__('Date'),'class'=>'form-control input-sm')),array('escape'=>false));
                 
                   
                    echo $this->Html->div('row',$this->Form->input('Destino',
                     array('label'=>'Destino',
                     'div'=>'col-xs-12',
                     'data-toggle'=>'tooltip',
                     'options' => array(
                     'Macroscopia'=>'Macroscopia', 
                     'Histologia'=>'Histologia',
                     'Ambas'=>'Ambas'),
                     'empty'=>'Escolha',
                     'onchange'=>'ShowSelect()',
                     'data-original-title'=>__('Tipo'),
                     'title'=>__('Tipo'),
                     'id'=>'Tipo',
                     'type'=>'select',
                     'class'=>'form-control')));                    
            



                    echo $this->Html->div('row',$this->Form->input('Conforme',
                                                             array('div'=>'col-xs-12',
                                                             'label'=>'Está conforme?',
                                                             'title'=>__('Conforme'),
                                                             'data-on-label' => 'Sim', 
                                                             'data-off-label' => 'Não', 
                                                             'checked',
                                                             'id'=>'Conforme_Check',
                                                             'value'=>'Sim',
                                                             'hiddenField'=>'Não',
                                                             'type' => 'checkbox')));

            ?>

    <form>
        
        <input type=button value="Abrir Camera" class="paddingButton" onClick="abrircamera()">

        <input type=button value="Tirar Foto" class="paddingButton" onClick="tirarfoto()">

    </form>
                <div id="my_camera"></div>

<form id="myform" method="post" action="salvarFoto">

        


    

    </form>

            
                    </div>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <td style="padding: 15px" ><button class="btn btn-primary" title='<?=__('Confirm')?>'  data-original-title='<?=__('Confirm')?>' data-toggle="tooltip" type="submit"  ><i class="fa fa-check fa-fw"></i> <?=__('Confirm')?></button></td>

               
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
</script>




<script>

    $(function () {
                    $('#Created').datetimepicker({
                         locale: 'pt-br',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script>

<script>
    $(function () {
                    $('#Modified').datetimepicker({
                         locale: 'pt-br',
                        format: 'DD-MM-YYYY HH:mm',
                        viewMode: 'days',
                    });
                    
                });
</script>





<script>
    function ShowSelect() {
    tipo = document.getElementById('Tipo').value;

        if (tipo=='Biopsia'||tipo=='Citologia_Liquidos' || tipo == 'Citologia_Puncao'){
            document.getElementById('Frascos').style.display = 'block';
            document.getElementById('Blocos').style.display = 'none';
        }
        if (tipo=='Citologia_Cervico_Vaginal'||tipo=='Congelacao'){
            document.getElementById('Blocos').style.display = 'block';
            document.getElementById('Frascos').style.display = 'none';
        }
        if (tipo=='Citologia_Puncao'){
            document.getElementById('Blocos').style.display = 'block';
            document.getElementById('Frascos').style.display = 'block';
            
        }

}
</script>

    

        <script language="JavaScript">
        
function abrircamera(){
        Webcam.set({
            width: 640,
            height: 480,
            image_format: 'jpeg',
            jpeg_quality: 90,
            flip_horiz: true,
            constraints: {
                width: { exact: 1280 },
                height: { exact: 720 }
            }
        });






        Webcam.attach( '#my_camera' );

    }

function tirarfoto(){
    Webcam.snap( function(data_uri) {
        
    





        var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
        document.getElementById('Foto').value = raw_image_data;
        //document.getElementById('picture').value = raw_image_data;

    //  document.getElementById('myform').submit();
    } );
}

    </script>

