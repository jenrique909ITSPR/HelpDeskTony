<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemcodes form">
	<h3><?= __('Add Itemcode') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemcodes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($itemcode) ?>

		<table cellpadding="0" cellspacing="0" style="width:100%;">
							<tbody>
											<tr><td  style="width:5%;"><?= $this->form->label(__('item_id')) ?></td><td><?=  $this->Form->control('item_id', ['options' => $items, 'empty' => true , 'label' => false]); ?></td></tr>
											<tr><td  style="width:5%;"><?= $this->form->label(__('serial')) ?></td><td><?=   $this->Form->control('title',['label' => false]); ?></td></tr>
                      <tr><td  style="width:5%;"><?= $this->form->label(__('invoice_id')) ?></td><td><?=  $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true , 'label' => false  ]); ?></td></tr>
											<tr><td  style="width:5%;"><?= $this->form->label(__('statusitem_id')) ?></td><td><?=  $this->Form->control('statusitem_id', ['options' => $statusitems, 'empty' => true , 'label' => false  ]); ?></td></tr>
											<tr><td  style="width:5%;"><?= $this->form->label(__('warranty')) ?></td><td><?=  $this->Form->control('warranty', ['empty' => true , 'label' => false]); ?></td></tr>
											<tr><td  style="width:5%;"><?= $this->form->label(__('positionbranch_id')) ?></td><td><?=  $this->Form->control('positionbranch_id', ['options' => $positionbranches, 'empty' => true , 'label' => false]); ?></td></tr>
											<tr><td  style="width:5%;"><?= $this->form->label(__('service_tag')) ?></td><td><?=  $this->Form->control('service_tag' , ['label' => false] ) ; ?></td></tr>
									</table>





        <?php







        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
