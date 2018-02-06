<?= $this->element('header'); ?>

  <div id="topnav" class="clear">

    <div id="appName" class="left">
          <?= $this->HTML->link('Tickets',['controller'=>'Tickets','action'=>'index']);?>
    </div>

    <div class="left">
     <ul class="topnavMenuL">
    <?php foreach ($ticketrows as $row): ?>
      <li>

        <?= $this->Html->link(('<i class="fa fa-square" aria-hidden="true" style="color: '. $row['color'] .'"></i> ' . $row['name'].' (' . $row['total'] .')' ), [ 'controller' => 'Tickets', 'action' => 'index' , $this->request->session()->read('typeViewTickets') , $row['tickettype_id']], ['escape' => false]); ?>
      </li>
    <?php endforeach; ?>

    </ul>
    </div>

    <div class="right">
      <ul class="topnavMenuR">

          <li><?= $this->Html->link(__('My Group'), ['controller' => 'Tickets', 'action' => 'team']); ?></li>
          <li><?= $this->Html->link(__('Dashboard'), ['controller' => 'Tickets', 'action' => 'dashboard']); ?></li>
          <!--<li>
            <select class="" name="">
              <option value="">Crear</option>
              <option value="">Ticket</option>
              <option value="">Articulo</option>
            </select>

          </li>-->
      </ul>
    </div>

    <div class="searchbox right">
      <?= $this->Form->create('ticketsearch', ['type' => 'get','url' => ['controller' => 'Tickets', 'action' => 'view']]) ?>
          <?php
              echo $this->Form->control('searchticket',['label' => false, 'placeholder' => __('Search ticket #')]);
          ?>
      <?= $this->Form->end() ?>


    </div>
  </div>
<<<<<<< HEAD

=======
>>>>>>> 4cf9fc411b5b1180514794d86c17ec99913fa4b3
<!--  <div class="breadcrumbs">
  HelpDesk <span class="sep">/</span> Items <span class="sep">/</span> Editar #123
</div>-->
<script type="text/javascript">
if (!!window.EventSource) {
    var source = new EventSource("<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'alerts']) ?>");
} else {
    alert("Your browser does not support Server-sent events! Please upgrade it!");
}
source.addEventListener("message", function(e) {
   //console.log(e.data);
    document.getElementById("result").innerHTML= e.data;
}, false);
</script>


<?= $this->element('footer') ?>
