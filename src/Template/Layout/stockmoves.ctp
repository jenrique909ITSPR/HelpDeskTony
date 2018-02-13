<?= $this->element('header'); ?>

  <div id="topnav" class="clear">

    <div id="appName" class="left">
          <?= $this->HTML->link('Stockmoves',['controller'=>'Stockmoves','action'=>'index']);?>
    </div>

    <div class="left">
     <ul class="topnavMenuL">
    
      <li>
        <?= $this->Html->link(('<i class="fa fa-truck" aria-hidden="true" style="color:#a0204c" > </i> Movimientos en transito'), [ 'controller' => 'Stockmoves', 'action' => 'index' ,1 ], ['escape' => false]); ?>
      </li>
      <li>
        <?= $this->Html->link(('<i class="fa fa-truck" aria-hidden="true" style="color:#fc4442"> </i> Movimientos incompletos'), [ 'controller' => 'Stockmoves', 'action' => 'index' ,2 ], ['escape' => false]); ?>
      </li>
       <li>
        <?= $this->Html->link(('<i class="fa fa-truck" aria-hidden="true" style="color:#669b7c"> </i> Movimientos cerrados'), [ 'controller' => 'Stockmoves', 'action' => 'index' ,3 ], ['escape' => false]); ?>
      </li>

    </ul>
    </div>

    <div class="right">
      <ul class="topnavMenuR">

          <li><?= $this->Html->link(__('Mas'), ['controller' => 'Stockmoves', 'action' => 'team']); ?></li>
        
          
      </ul>
    </div>

    <div class="searchbox right">
      
    </div>
  </div>




<?= $this->element('footer') ?>