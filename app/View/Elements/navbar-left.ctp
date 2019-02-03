<style type="text/css">
.user-panel>.image>img {
    width: 150px;
    height:145px;
    margin-left: 25px;
        border-radius: 50%;
        margin-top: 10px;

}
.skin-black .main-sidebar, .skin-black .left-side, .skin-black .wrapper {
    background: #34495E;
}
.skin-black .main-sidebar, .skin-black .left-side, .skin-black .wrapper:hover {
    background: #34495E;
}
.user-panel>.info>p { 
    text-align: center;
}
.skin-black .sidebar>.sidebar-menu>li>a:hover{
  background-color: white;
  color: #34495E;
}
</style>




<?= $this->Html->css('all.min.css') ?>
<?= $this->Html->script('all.min.js') ?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-center image">
                <?php if ($this->Session->read('Auth.User.image') != null) {
                    echo $this->Html->Image(str_replace('img/', "", $this->Session->read('Auth.User.image')), array('class' => 'user-image', 'alt' => 'User Image'));
                } else {
                    echo $this->Html->Image('avatar.jpg', array('class' => 'user-image', 'alt' => 'User Image'));
                } ?>
            </div>
            <div class="pull-center info">
                <p><?php
                    echo $this->Html->para(null, __('Olá') . ', '. $this->Session->read('Auth.User.name'));
                    ?></p>
            </div>
        </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="<?php echo $this->Html->url(array(
                        'plugin' => false, 'admin' => false, 'controller' => 'pages',
                        'action' => 'display'
                    )); ?>">
                        <i class="fas fa-home"></i><span><?php echo __(" Início") ?></span>
                    </a>

                    <a href="<?php echo $this->Html->url(array(
                        'plugin' => false, 'admin' => false, 'controller' => 'PreConfs',
                        'action' => 'add'
                    )); ?>">
                    <i class="fas fa-address-book"></i><span><?php echo __(" Pré-Conferência") ?></span>
                    </a>
                    

        <li class="treeview">
             <a href="<?php echo $this->Html->url(array(
                                'plugin' => false, 'admin' => false, 'controller' => 'Macros',
                                'action' => 'index/'
                            )); ?>">
                 <i class="fas fa-medkit"></i><span><?php echo __(" Macroscopia") ?></span>
             </a>
        </li>


    <li class="treeview">
             <a href="#">
                 <i class="fa fa-edit"></i>
                    <span><?php echo __('Histologia') ?></span>
             </a>
             <ul class="treeview-menu">          
                <li class="treeview">
                     <a href="<?php echo $this->Html->url(array(
                        'plugin' => false, 'admin' => false, 'controller' => 'Histologia1s',
                        'action' => 'index'
                        )); ?>">
                          <i class="fa fa-thumb-tack"></i> <span><?php echo __("Histologia 1") ?></span>
                    </a>
                </li>
                 <li class="treeview">
                     <a href="<?php echo $this->Html->url(array(
                        'plugin' => false, 'admin' => false, 'controller' => 'Histologia2s',
                        'action' => 'index'
                        )); ?>">
                          <i class="fa fa-thumb-tack"></i> <span><?php echo __("Histologia 2") ?></span>
                    </a>
                </li>
                <li class="treeview">
                     <a href="<?php echo $this->Html->url(array(
                        'plugin' => false, 'admin' => false, 'controller' => 'Histologia3s',
                        'action' => 'index'
                        )); ?>">
                          <i class="fa fa-thumb-tack"></i> <span><?php echo __("Histologia 3") ?></span>
                    </a>
                </li>
         </ul>
     </li>
  
                <li class="treeview">
                       <a href="<?php echo $this->Html->url(array(
                                'plugin' => false, 'admin' => false, 'controller' => 'Arquivos',
                                'action' => 'index'
                            )); ?>">
                            <i class="fas fa-notes-medical"></i><span><?php echo __(" Arquivo") ?></span>
                    </a>
                    </li>
               
        
                 
                <li class="treeview">
                       <a href="<?php echo $this->Html->url(array(
                                'plugin' => false, 'admin' => false, 'controller' => 'Laminas',
                                'action' => 'index'
                            )); ?>">
                            <i class="fas fa-notes-medical"></i><span><?php echo __(" Citologia") ?></span>
                    </a>
                    </li>
                <li class="treeview">
                    <a href="<?php echo $this->Html->url(array(
                                'plugin' => false, 'admin' => false, 'controller' => 'Relatorios',
                                'action' => 'index'
                            )); ?>">
                                <i class="fas fa-file-pdf"></i><span><?php echo __(" Relatorio de Descarte") ?></span>
                    </a>     
                </li>
                    

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i>
                        <span><?php echo __('Registration') ?></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="<?php echo $this->Html->url(array(
                                'plugin' => false, 'admin' => false, 'controller' => 'Medics',
                                'action' => 'index'
                            )); ?>">
                                <i class="fa fa-thumb-tack"></i> <span><?php echo __("Médicos") ?></span>
                            </a>
                        </li>
                    <li class="treeview">
                            <a href="<?php echo $this->Html->url(array(
                                'plugin' => false, 'admin' => false, 'controller' => 'Hospitals',
                                'action' => 'index'
                            )); ?>">
                                <i class="fa fa-thumb-tack"></i> <span><?php echo __("Hospitais") ?></span>
                            </a>
                        </li>
                    <li class="treeview">
                            <a href="<?php echo $this->Html->url(array(
                                'plugin' => false, 'admin' => false, 'controller' => 'Pacients',
                                'action' => 'index'
                            )); ?>">
                                <i class="fa fa-thumb-tack"></i> <span><?php echo __("Pacientes") ?></span>
                            </a>
                        </li>
              
                    </ul>
                </li>

 <li class="treeview">
             <a href="#">
                 <i class="fa fa-edit"></i>
                    <span><?php echo __('Macroscopia') ?></span>
             </a>
        <ul class="treeview-menu">          
             <li class="treeview">
                 <a href="<?php echo $this->Html->url(array(
                'plugin' => false, 'admin' => false, 'controller' => 'Pecas',
                'action' => 'index'
                )); ?>">
                    <i class="fa fa-thumb-tack"></i> <span><?php echo __("Macro") ?></span>
                </a>
             </li>
         </ul>
     </li>

                         
    
<!--                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-print"></i>
                        <span><?php echo __('Reports') ?></span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo $this->Html->url(array('plugin' => false, 'admin' => false, 'controller' => 'Demands', 'action' => 'report')); ?>"><i
                                        class="fa fa-table"></i> <?php echo __('Por Localização') ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->Html->url(array('plugin' => false, 'admin' => false, 'controller' => 'Demands', 'action' => 'report')); ?>"><i
                                        class="fa fa-table"></i> <?php echo __('Listar Demanda da Ouvidoria') ?>
                            </a>
                        </li>
                    </ul>
                </li>
  -->  
            </ul>

    </section>
    <!-- /.sidebar -->
</aside>