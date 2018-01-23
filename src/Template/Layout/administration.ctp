<?= $this->element('header'); ?>

<div id="topnav" class="clear">
  <div id="appName" class="left">
        <?= $this->fetch('title') ?>
  </div>
</div>

<?= $this->Flash->render() ?>
<div class="container clearfix">

  <div class="navleft easyui-accordion" >
      <div title="<i class='fa fa-ticket' aria-hidden='true'></i> <?= __('Tickets') ?>" >
        <ul class="side-nav">
          <!--<li><?= $this->Html->link(__('Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>-->
          <li><?= $this->Html->link(__('Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index'], ['class' => 'showajax']) ?></li>
          <li><?= $this->Html->link(__('Ticketstatuses'), ['controller' => 'Ticketstatuses', 'action' => 'index'], ['class' => 'showajax']) ?></li>
          <li><?= $this->Html->link(__('Sources'), ['controller' => 'Sources', 'action' => 'index'], ['class' => 'showajax']) ?></li>
          <li><?= $this->Html->link(__('Ticketimpacts'), ['controller' => 'Ticketimpacts', 'action' => 'index'], ['class' => 'showajax']) ?></li>
          <li><?= $this->Html->link(__('Ticketurgencies'), ['controller' => 'Ticketurgencies', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Ticketpriorities'), ['controller' => 'Ticketpriorities', 'action' => 'index']) ?></li>
          <!--<li><?= $this->Html->link(__('Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>-->
          <li><?= $this->Html->link(__('Hdtemplate'), ['controller' => 'Hdtemplate', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Ticketnotes'), ['controller' => 'Ticketnotes', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Ticketnotestypes'), ['controller' => 'Ticketnotestypes', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Ticketsfiles'), ['controller' => 'Ticketsfiles', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Ticketmarkeds'), ['controller' => 'Ticketmarkeds', 'action' => 'index']) ?></li>
        </ul>
      </div>
      <div title="<i class='fa fa-cubes' aria-hidden='true'></i> <?= __('Items') ?>" >
        <ul class="side-nav">
          <li><?= $this->Html->link(__('Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Purchaseorders'), ['controller' => 'Purchaseorders', 'action' => 'index']) ?></li>
          <!--<li><?= $this->Html->link(__('Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>-->
          <!--<li><?= $this->Html->link(__('Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Shippers'), ['controller' => 'Shippers', 'action' => 'index']) ?></li>-->
        </ul>
      </div>
      <div title="<i class='fa fa-users' aria-hidden='true'></i> <?= __('Users') ?>" >
        <ul class="side-nav">
          <li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Mensajes'), ['controller' => 'Userendmessages', 'action' => 'index']) ?></li>
        </ul>
      </div>
      <div title="<i class='fa fa-home' aria-hidden='true'></i> <?= __('Branches') ?>" >
        <ul class="side-nav">
          <!--<li><?= $this->Html->link(__('Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Branchgroups'), ['controller' => 'Branchgroups', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Warehouses'), ['controller' => 'Warehouses', 'action' => 'index']) ?></li>-->
          <li><?= $this->Html->link(__('Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('StockmovesDetails'), ['controller' => 'StockmovesDetails', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Layouts'), ['controller' => 'Positiontypebranches', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Layoutcategories'), ['controller' => 'Positiontypes', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Movereasons'), ['controller' => 'Movereasons', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('PositionItemcategories'), ['controller' => 'PositiontypebranchesItemcategories', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Statusitems'), ['controller' => 'Statusitems', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Statususers'), ['controller' => 'Statususers', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Movereasontemplates'), ['controller' => 'Movereasontemplates', 'action' => 'index']) ?></li>
        </ul>
      </div>
      <div title="<i class='fa fa-graduation-cap' aria-hidden='true'></i> <?= __('Articles') ?>" >
        <ul class="side-nav">
          <!--<li><?= $this->Html->link(__('Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>-->
          <li><?= $this->Html->link(__('Articlefiles'), ['controller' => 'Articlefiles', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('ArticlesRoles'), ['controller' => 'ArticlesRoles', 'action' => 'index']) ?></li>
        </ul>
      </div>
      <!--<div title="<i class='fa fa-graduation-cap' aria-hidden='true'></i> <?= __('Preferences') ?>" >
        <ul class="side-nav">
        </ul>
      </div>
      <div title="<i class='fa fa-graduation-cap' aria-hidden='true'></i> <?= __('System') ?>" >
        <ul class="side-nav">
        </ul>
      </div>-->

  </div>


  <div id="contentAjax">
    <?= $this->fetch('content') ?>
  </div>


</div>



<div class="footer">
    Desarrollado por TI Operaciones © Copyright 2017 - TONY Tiendas. Todos los derechos reservados
</div>
</body>
</html>
