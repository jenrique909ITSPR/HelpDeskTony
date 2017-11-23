<?= $this->element('header'); ?>

  <div id="topnav" class="clear">

    <div id="appName" class="left">
          <?= $this->HTML->link('Tickets',['controller'=>'Tickets','action'=>'index']);?>
    </div>

    <div class="left">
     <ul class="topnavMenuL">
    <?php foreach ($ticketrows as $row): ?>
      <li>
        
        <?= $this->Html->link(($row['name'].' (' . $row['total'] .')' ), ['tipo_vista' , $row['tickettype_id']]); ?>
      </li>
    <?php endforeach; ?>

    </ul>
    </div>

    <div class="right">
    	<ul class="topnavMenuR">

          <li><?= $this->Html->link(__('My Group'), ['controller' => 'Tickets', 'action' => 'team']); ?></li>
          <li><a href="" title="Reportes">Indicadores</a></li>
          <li><a href=""  title="Ajustes">Ajustes</a></li>
      </ul>
    </div>

    <div class="searchbox right">
      <?= $this->Form->create('ticketsearch', ['type' => 'get','url' => ['controller' => 'Tickets', 'action' => 'view']]) ?>
          <?php
              echo $this->Form->control('searchticket',['label' => false]);
          ?>
      <?= $this->Form->end() ?>


    </div>
  </div>


<!--  <div class="breadcrumbs">
  HelpDesk <span class="sep">/</span> Items <span class="sep">/</span> Editar #123
</div>-->


<?= $this->element('footer') ?>
