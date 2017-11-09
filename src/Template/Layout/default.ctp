<?= $this->element('header'); ?>


<div id="topnav" class="clear">
  <div id="appName" class="left">
        <?= $this->fetch('title') ?>
  </div>

  <!--<div class="left">
   <ul class="topnavMenuL">
  <?php foreach ($ticketrows as $row): ?>
    <li>
      <?= $this->Html->link(($row['name'].' (' . $row['total'] .')' ), ['controller' => 'Tickets', 'action' => 'index', $row['tickettype_id']]); ?>
    </li>
  <?php endforeach; ?>
  </ul>
  </div>

  <div class="right">
    <ul class="topnavMenuR">
        <li><a href="" title="Dashboard">Layout</a></li>
        <li><a href="" title="Reportes">Indicadores</a></li>
        <li><a href=""  title="Ajustes">Ajustes</a></li>
    </ul>
  </div>

  <div class="searchbox right">
    <?= $this->Form->create('search', ['type' => 'get','url' => ['controller' => 'Items', 'action' => 'view']]) ?>
        <?php
            echo $this->Form->control('search',['label' => false]);
        ?>
    <?= $this->Form->end() ?>
  </div>-->
</div>


<?= $this->element('footer') ?>
