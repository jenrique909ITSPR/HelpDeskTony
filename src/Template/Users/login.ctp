<div id="login">

	<h1>PORTAL TI</h1>
	<!--<div class="logo"></div>-->
	<?= $this->Flash->render() ?>
	
	<?= $this->Form->create() ?>
	<?= $this->Form->control('name') ?>
	<?= $this->Form->control('password') ?>
	<?= $this->Form->button('ENTER') ?>
	<?= $this->Form->end() ?>
	<div id="footer">Desarrollado por TI Operaciones © 2017 TONY Tiendas. <br />Todos los derechos reservado</div>
</div>
