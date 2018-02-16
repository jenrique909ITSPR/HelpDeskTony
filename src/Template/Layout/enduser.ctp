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

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

  <?= $this->Html->script('jquery.min.js'); ?>
  <?= $this->Html->script('jquery.easyui.min.js'); ?>
</head>
<body class="enduser">

<div id="header">
  <div id="logoEndUser" class="left"><i class="fa fa-user" aria-hidden="true"></i></div>

  <div id="logo" class="left">PORTAL TI</div>
  <div class="right">
    <ul class="headernav">
      <li><?= $this->Html->link("<i class='fa fa-user-circle' aria-hidden='true'></i>" . $this->request->session()->read('Auth.User.name').' '.$this->request->session()->read('Auth.User.last_name'), ['controller' => 'Users', 'action' => 'view', $this->request->session()->read('Auth.User.id')], ['escape' => false]) ?></li>
      <li><?= $this->Html->link("<i class='fa fa-power-off' aria-hidden='true'></i>" . __('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?></li>
    </ul>
  </div>
</div>

<div class="container clearfix">
    <div class="navleft fixed">
      <div class="userIP">
        <i class="fa fa-desktop" aria-hidden="true"></i><p><?= $this->request->clientIp(); ?></p>
      </div>
      <div class="menuEnduser">
        <ul>
          <li><?= $this->Html->link("<i class='fa fa-bars' aria-hidden='true'></i>" . __('My Tickets'), ['controller' => 'tickets', 'action' => 'enduserindex'], ['escape' => false]) ?></li>
          <li><?= $this->Html->link("<i class='fa fa-bug' aria-hidden='true'></i>" . __('Report incident'), ['controller' => 'tickets', 'action' => 'enduseradd' , 1], ['escape' => false]) ?></li>
          <li><?= $this->Html->link("<i class='fa fa-ticket' aria-hidden='true'></i>" . __('Create a request'), ['controller' => 'tickets', 'action' => 'enduseradd' , 2], ['escape' => false]) ?></li>
          <li><?= $this->Html->link("<i class='fa fa-graduation-cap' aria-hidden='true'></i>" . __('Knowledge'), ['controller' => 'Articles', 'action' => 'enduserindex'], ['escape' => false]) ?></li>
          
        </ul>
      </div>
    </div>
    <br>
    <div id="contentAjax">
      <?php foreach ($messages as $key):?>
      <div class="messageEndUser">

          <b>NOTIFICACION:</b> <?= $key->message ?>

      </div>
       <?php endforeach; ?>
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
      <div class="footer">
          Desarrollado por TI Operaciones © Copyright 2017 - TONY Tiendas. Todos los derechos reservados
      </div>

    </div>
</div>

</body>
</html>
