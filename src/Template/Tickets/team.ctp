<div class="tickets index">

  <div class="boxContainer center">
    <ul class="myfilter">
      <li><?= $this->Html->link(__('My Ticket'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
      <li class="myfilterActive"><?= $this->Html->link(__('My Group'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('All Ticket'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
    </ul>
  </div>

<h3><?= __('My Team') ?></h3>
<div class="column2">
  <table>
    <tr>
      <td><?= __('Users') ?></td>
      <td>I</td>
      <td>P</td>
      <td>S</td>
      <td>C</td>
    </tr>
  </table>
</div>

<div class="column2">
  <table>
    <tr>
      <td><?= __('Branches') ?></td>
      <td>I</td>
      <td>P</td>
      <td>S</td>
      <td>C</td>
    </tr>
  </table>
</div>

</div>