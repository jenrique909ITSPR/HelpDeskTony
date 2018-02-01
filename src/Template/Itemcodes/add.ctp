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

        <table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
            <tbody>
                <tr>
									<td  style="width:5%;"><?= $this->form->label(__('Item')) ?></td>
									<td width="55%"><?= $this->Form->control('item_id', ['label' => false,'options' => $items, 'empty' => true]); ?></td>
									<td  style="width:5%;"><?= $this->form->label(__('Statusitems')) ?></td>
									<td colspan="3"><?= $this->Form->control('statusitem_id', ['label' => false,'options' => $statusitems, 'empty' => true]); ?></td>
								</tr>
                <tr>
									<td><?= $this->form->label(__('Serial')) ?></td>
									<td><?= $this->Form->control('serial',['label' => false]); ?></td>
									<td><?= $this->form->label(__('Positionbranches')) ?></td>
									<td colspan="3"><?=  $this->Form->control('positionbranch_id', ['label' => false,'options' => $positionbranches, 'empty' => true]); ?></td>
								</tr>
								<tr>
									<td><?= $this->form->label(__('Invoices')) ?></td>
									<td><?= $this->Form->control('invoice_id', ['label' => false,'options' => $invoices, 'empty' => true]); ?></td>
									<td><?= $this->form->label(__('Insured')) ?></td>
									<td><?= $this->Form->control('insured',['label' => false]); ?></td>
									<td><?= $this->form->label(__('Service tag')) ?></td>
									<td><?= $this->Form->control('service_tag',['label' => false]); ?></td>
								</tr>
                <tr>
									<td><?= $this->form->label(__('Warranty')) ?></td>
									<td colspan="5"><?=  $this->Form->control('warranty', ['label' => false,'empty' => true, 'type'=> 'date']); ?></td>
								</tr>
                <tr>

								</tr>
                <tr>
									<td  style="width:5%;"><?= $this->form->label(__('Cost')) ?></td>
									<td><?= $this->Form->control('cost',['label' => false]); ?></td>
									<td  style="width:5%;"><?= $this->form->label(__('Currencies')) ?></td>
									<td colspan="3"><?= $this->Form->control('currency_id', ['label' => false,'options' => $currencies, 'empty' => true]); ?></td>
								</tr>
            </tbody>
        </table>
	</div>
<br />


<div class="easyui-layout" style="width:100%;height:500px;">
		<div data-options="region:'north', collapsible:false" title="<?= __('Invoice') ?>" style="padding: 5px 5px;">

			<table class="tableTransparent" cellpadding="0" cellspacing="0" style="width:auto;">
								<tr><td  style="width:5%;"><?= $this->form->label(__('invoice_id')) ?></td><td><?=  $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true , 'label' => false  ]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('item_id')) ?></td><td><?=  $this->Form->control('item_id', ['options' => $items, 'empty' => true , 'label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('serial')) ?></td><td><?=   $this->Form->control('title',['label' => false]); ?></td></tr>

								<tr><td  style="width:5%;"><?= $this->form->label(__('statusitem_id')) ?></td><td><?=  $this->Form->control('statusitem_id', ['options' => $statusitems, 'empty' => true , 'label' => false  ]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('warranty')) ?></td><td><?=  $this->Form->control('warranty', ['empty' => true , 'label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('positionbranch_id')) ?></td><td><?=  $this->Form->control('positionbranch_id', ['options' => $positionbranches, 'empty' => true , 'label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('service_tag')) ?></td><td><?=  $this->Form->control('service_tag' , ['label' => false] ) ; ?></td></tr>
			</table>

		</div>
		<div data-options="region:'east',split:true,collapsible:false" title="<?= __('Serials') ?>" style="width:250px; padding: 5px 5px;">
			<?=   $this->Form->control('title',['label' => false]); ?>
			<table class="" cellpadding="0" cellspacing="0" style="">
					<tr>
						<td><?=   $this->Form->control('title',['label' => false]); ?></td>
						<td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
					</tr>
					<tr>
						<td><?=   $this->Form->control('title',['label' => false]); ?></td>
						<td>[Borrar]</td>
					</tr>
					<tr>
						<td><?=   $this->Form->control('title',['label' => false]); ?></td>
						<td>[Borrar]</td>
					</tr>
			</table>

		</div>
		<div data-options="region:'center', collapsible:false" title="<?= __('Assets') ?>" style="padding: 5px 5px;">
			<table class="tableTransparent" cellpadding="0" cellspacing="0" style="width:auto;">
								<tr><td  style="width:5%;"><?= $this->form->label(__('invoice_id')) ?></td><td><?=  $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true , 'label' => false  ]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('item_id')) ?></td><td><?=  $this->Form->control('item_id', ['options' => $items, 'empty' => true , 'label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('serial')) ?></td><td><?=   $this->Form->control('title',['label' => false]); ?></td></tr>

								<tr><td  style="width:5%;"><?= $this->form->label(__('statusitem_id')) ?></td><td><?=  $this->Form->control('statusitem_id', ['options' => $statusitems, 'empty' => true , 'label' => false  ]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('warranty')) ?></td><td><?=  $this->Form->control('warranty', ['empty' => true , 'label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('positionbranch_id')) ?></td><td><?=  $this->Form->control('positionbranch_id', ['options' => $positionbranches, 'empty' => true , 'label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('service_tag')) ?></td><td><?=  $this->Form->control('service_tag' , ['label' => false] ) ; ?></td></tr>
			</table>


		</div>
</div>








</div>
