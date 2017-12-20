

	<?= $this->element('header'); ?>


  <div id="topnav" class="clear">
    <div id="appName" class="left">
      <!-- redirecciona a tickets-->
          <?= $this->HTML->link(__('Items'),['controller'=>'Items','action'=>'index']);?>
    </div>

    <!--<div class="left">
     <ul class="topnavMenuL">
      <li>
        <?= $this->Html->link(__("Warehouses"), ['controller' => 'Warehouses', 'action' => 'index']); ?>
      </li>
		 </ul>
	 </div>-->

    <!--<div class="right">
    	<ul class="topnavMenuR">
          <li><a href="" title="Dashboard">Layout</a></li>
          <li><a href="" title="Reportes">Indicadores</a></li>
          <li><a href=""  title="Ajustes">Ajustes</a></li>
      </ul>
    </div>-->

    <div class="searchbox right">
      <?= $this->Form->create('search', ['type' => 'get','url' => ['controller' => 'Items', 'action' => 'view']]) ?>
          <?php
              echo $this->Form->control('search',['label' => false]);
          ?>
      <?= $this->Form->end() ?>
    </div>
  </div>


	<?= $this->element('footer') ?>
