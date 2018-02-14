<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Portal TI';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
	  <?= $this->Html->css('font-awesome.css') ?>
	  <?= $this->Html->css('themes/gray/easyui.css') ?>
	  <?= $this->Html->css('themes/icon.css') ?>
    <?= $this->Html->css('jquery.jqplot.css')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

	<?= $this->Html->script('jquery.min.js'); ?>
  <!--<?= $this->Html->script('jqPlot/src/jquery.jqplot.js'); ?>
  <?= $this->Html->script('jqPlot/src/plugins/jqplot.pieRenderer.js'); ?>
  <?= $this->Html->script('/src/plugins/jqplot.barRenderer.js'); ?>
  <?= $this->Html->script('/src/plugins/jqplot.categoryAxisRenderer.js'); ?>
  <?= $this->Html->script('/src/plugins/jqplot.pointLabels.js'); ?>-->
	<?= $this->Html->script('jquery.easyui.min.js'); ?>
  <!--<?= $this->Html->script('js/tinymce/jquery.tinymce.min.js'); ?>
  <?= $this->Html->script('js/tinymce/tinymce.min.js'); ?>-->



</head>
<body>

<div id="header">
  <!--<div id="mainmenu" class="left"><i class="fa fa-bars" aria-hidden="true"></i></div>-->
  <nav class="dropdownmenu left">
    <ul>
      <li><a href="#"><i class='fa fa-bars' aria-hidden='true'></i></a>
        <ul id="submenu">
          <li><a href="#"><i class='fa fa-life-ring' aria-hidden='true'></i><?= __('HelpDesk') ?></a>
            <ul class="submenu2">
              <li><?= $this->Html->link("<i class='fa fa-ticket' aria-hidden='true'></i>" . __('Tickets'), ['controller' => 'Tickets', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
          </li>
          <li><a href="#"><i class='fa fa-graduation-cap' aria-hidden='true'></i><?= __('Knowledge') ?></a>
            <ul class="submenu2">
              <li><?= $this->Html->link("<i class='fa fa-book' aria-hidden='true'></i>" . __('Articles'), ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-folder-open' aria-hidden='true'></i>" . __('Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
          </li>
          <li><a href="#"><i class='fa fa-cubes' aria-hidden='true'></i><?= __('Inventory') ?></a>
            <ul class="submenu2">
              <li><?= $this->Html->link("<i class='fa fa-cube' aria-hidden='true'></i>" . __('Assets'), ['controller' => 'Itemcodes', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-paper-plane-o' aria-hidden='true'></i>" . __('Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-folder' aria-hidden='true'></i>" . __('Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-trademark' aria-hidden='true'></i>" . __('Brands'), ['controller' => 'Brands', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-home' aria-hidden='true'></i>" . __('Warehouses'), ['controller' => 'Warehouses', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-truck' aria-hidden='true'></i>" . __('Shippers'), ['controller' => 'Shippers', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
          </li>
          <li><a href="#"><i class='fa fa-shopping-cart' aria-hidden='true'></i><?= __('Purchases') ?></a>
            <ul class="submenu2">
            <li><?= $this->Html->link("<i class='fa fa-handshake-o' aria-hidden='true'></i>" . __('Suppliers'), ['controller' => 'Suppliers', 'action' => 'index'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link("<i class='fa fa-credit-card' aria-hidden='true'></i>" . __('Purchaseorders'), ['controller' => 'Purchaseorders', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-file-text-o' aria-hidden='true'></i>" . __('Invoices'), ['controller' => 'Invoices', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-money' aria-hidden='true'></i>" . __('Currencies'), ['controller' => 'Currencies', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
          </li>
          <li><a href="#"><i class='fa fa-building-o' aria-hidden='true'></i><?= __('Branches') ?></a>
            <ul class="submenu2">
              <li><?= $this->Html->link("<i class='fa fa-home' aria-hidden='true'></i>" . __('Branches'), ['controller' => 'Branches', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-object-group' aria-hidden='true'></i>" . __('Branchgroups'), ['controller' => 'Branchgroups', 'action' => 'index'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-map' aria-hidden='true'></i>" . __('Layouts'), ['controller' => 'Positiontypebranches', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
          </li>
          <li><a href="#"><i class='fa fa-cogs' aria-hidden='true'></i><?= __('System') ?></a>
            <ul class="submenu2">
              <li><?= $this->Html->link("<i class='fa fa-desktop' aria-hidden='true'></i>" . __('Preferences'), ['controller' => 'Pages', 'action' => 'admin'], ['escape' => false]) ?></li>
              <li><?= $this->Html->link("<i class='fa fa-cog' aria-hidden='true'></i>" . __('Administration'), ['controller' => 'Pages', 'action' => 'admin'], ['escape' => false]) ?></li>
            </ul>
          </li>
          <li><?= $this->Html->link("<i class='fa fa-user' aria-hidden='true'></i>" . __('User Portal'), ['controller' => 'tickets', 'action' => 'enduserindex'], ['escape' => false, 'target' => '_blank']) ?></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="logo" class="left">PORTAL TI</div>
  <div class="right">
    <ul class="headernav">
      <li><a id='bell' href="" class=""><i class="fa fa-bell-o" aria-hidden="true"></i><span id="result">(0)</span></a></li>
      <li><?= $this->Html->link('<i class="fa fa-thumb-tack" aria-hidden="true"></i>' . __('Markeds'), ['controller' => 'Ticketmarkeds', 'action' => 'index'], ['escape' => false]) ?></li>
      <li><?= $this->Html->link('<i class="fa fa-graduation-cap" aria-hidden="true"></i>' . __('Knowledge'), ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]) ?></li>
      <li><?= $this->Html->link("<i class='fa fa-user-circle' aria-hidden='true'></i>" . $this->request->session()->read('Auth.User.name').' '.$this->request->session()->read('Auth.User.last_name'), ['controller' => 'Users', 'action' => 'view', $this->request->session()->read('Auth.User.id')], ['escape' => false]) ?></li>
      <li><?= $this->Html->link("<i class='fa fa-power-off' aria-hidden='true'></i>" . __('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?></li>
    </ul>
  </div>
</div>
<script type="text/javascript">
if (!!window.EventSource) {
    var source = new EventSource("<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'alerts']) ?>");
} else {
    alert("Your browser does not support Server-sent events! Please upgrade it!");
}
source.addEventListener("message", function(e) {
   //console.log(e.data);

    if(e.data == '(0)'){
      document.getElementById("result").innerHTML= e.data;
      $('#bell').removeClass('blink bgalert');
    }else{
      document.getElementById("result").innerHTML= e.data;
      $('#bell').addClass('blink bgalert');
    }


}, false);
</script>
