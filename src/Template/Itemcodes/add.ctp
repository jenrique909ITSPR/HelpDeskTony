<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Form->create($itemcode) ?>
<div class="itemcodes form">
	
	

	<div class="editdata">
        <table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
            <tbody>
                <!--<tr>
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
				</tr>-->
				<tr>
					<!--<td><?= $this->form->label(__('Invoices')) ?></td>
					<td><?= $this->Form->control('invoice_id', ['label' => false,'options' => $invoices, 'empty' => true]); ?></td>-->
					<td><?= $this->form->label(__('Insured')) ?></td>
					<td><?= $this->Form->control('insured_id',['options' => $insureds,'empty' => true,'label' => false]); ?></td>
					<td><?= $this->form->label(__('Service tag')) ?></td>
					<td><?= $this->Form->control('service_tag',['label' => false]); ?></td>
				</tr>
                <tr>

				<td style="width:5%;"><?= $this->form->label(__('Warranty')) ?></td>
				<td colspan="1"><?=  $this->Form->created('warranty', ['label' => false,'empty' => true, 'type'=> 'date']); ?></td>
				<td  style="width:5%;"><?= $this->form->label(__('Cost')) ?></td>
				<td colspan="1"><?= $this->Form->control('cost',['label' => false]); ?></td>
				<td  style="width:5%;"><?= $this->form->label(__('Currencies')) ?></td>
				<td colspan="1"><?= $this->Form->control('currency_id', ['label' => false,'options' => $currencies, 'empty' => true]); ?></td>
			</tr>
               
            </tbody>
        </table>
	</div>
<br />


<div class="easyui-layout" style="width:100%;height:500px;">
		<div data-options="region:'north', collapsible:false" title="<?= __('Invoice') ?>" style="height: 22%; padding: 5px;">
			<table class="tableTransparent" cellpadding="0" cellspacing="0" style="width:auto;">
					<tr><td  style="width:5%;"><?= $this->form->label(__('invoice_number')) ?></td><td><?=  $this->Form->control('invoices.invoice_number', ['type' => 'text', 'empty' => true , 'label' => false  ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('purchaseorder')) ?></td><td><?=  $this->Form->control('invoices.purchaseorder_id', ['type' => 'text', 'empty' => true , 'label' => false  ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('date')) ?></td><td><?=  $this->Form->created('invoices.invoicedate', ['type' => 'date', 'empty' => true , 'label' => false  ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('amount')) ?></td><td><?=  $this->Form->control('invoices.amount', ['type' => 'number', 'empty' => true , 'label' => false  ]); ?></td></tr>
					<tr>
					<td  style="width:5%;"><?= $this->form->label(__('supplier')) ?></td><td><?=  $this->Form->control('invoices.supplier_id', [ 'empty' => true , 'label' => false, 'type' => 'text'  ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('currency')) ?></td><td><?=  $this->Form->control('invoices.currency_id', [ 'empty' => true , 'label' => false , 'options' => $currencies ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('warehouse')) ?></td><td><?=  $this->Form->control('invoices.warehouse_id', [ 'empty' => true , 'label' => false , 'options' => $warehouses ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('empresa')) ?></td><td><?=  $this->Form->control('invoices.company_id', [ 'type' => 'text','empty' => true , 'label' => false  ]); ?></td></tr>
			</table>

		</div>
		<div data-options="region:'east',split:true,collapsible:false" title="<?= __('Serials') ?>" style="width:250px; padding: 5px 5px;">
			<?=   $this->Form->control('title',['label' => false]); ?>
			<table class="" cellpadding="0" cellspacing="0" style="">
					<tr>
						<td><?=   $this->Form->control('itemcodes[]serial',['label' => false]); ?></td>
						<td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
					</tr>
					<tr>
						<td><?=   $this->Form->control('itemcodes[]serial',['label' => false]); ?></td>
						<td>[Borrar]</td>
					</tr>
					<tr>
						<td><?=   $this->Form->control('itemcodes[]serial',['label' => false]); ?></td>
						<td>[Borrar]</td>
					</tr>
			</table>

		</div>
		<div data-options="region:'center', collapsible:false" title="<?= __('Assets') ?>" style="padding: 5px 5px;">
			<table class="tableTransparent" cellpadding="0" cellspacing="0" style="width:auto;">
								<tr>
							<td style="width:5%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td colspan="3">
								<?= $this->Form->control('item_id',['id'=>'cg','label'=> false,'style'=> "width:100%;" , 'type' => 'text']);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('itemcategory')) ?>
							</td>
							<td width="33%">
									<?php  echo $this->Form->control('items.itemcategory_id', ['options' => $itemcategories, 'empty' => true,'label'=> false,'id' => 'itemcategory_id']);?>
							</td>
							<td width="7%">
								<?= $this->form->label(__('itemtype')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.itemtype_id', ['options' => $itemtypes,'label'=> false,'id' => 'itemtype_id']);?>
							</td>
							
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('brand')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.brand_id', ['options' => $brands,'label'=> false, 'id'=>'brand_id']);?>
							</td>
							<td>
								<?= $this->form->label(__('model')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.model', ['id'=> 'model' ,'label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('color')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.color', ['id'=>'color' ,'label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('unit_cost')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.unit_cost', ['id' => 'unit_cost', 'label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('currency')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('items.currency_id', ['options' => $currencies,'label'=> false, 'id' => 'currency_id']);?>
							</td>
						</tr>
			</table>
			
		</div>

</div>

</div>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
<script type="text/javascript">
   $(function(){
    $('#cg').combogrid({
        delay: 500,
        url: '<?= $this->Url->build(['controller' => 'Items', 'action' => 'loaditemsadd']) ?>',
        idField:'id',
        textField:'name',
        mode:'remote',
        fitColumns:true,
        columns:[[
            {field:'id',title:'ID',width:20},
            {field:'name',title:'Name',width:150},
            {field:'model',title:'Modelo',align:'right',width:60},
            {field:'color',title:'Color',align:'right',width:60},
            {field:'unit_cost',title:'Unit cost',align:'center',width:60},
            {field:'itemcategory_id',title:'Itemcategory',align:'center',width:60},
            {field:'itemtype_id',title:'Itemtype',align:'center',width:60},
            {field:'currency_id',title:'Currency',align:'center',width:60},
            {field:'brand_id',title:'Brand',align:'center',width:60}
            
        ]],
        onChange: function(){
        	var g = $('#cg').combogrid('grid');	// get datagrid object
			var r = g.datagrid('getSelected');	// get the selected row
			if(!(r === null)){
				$('#item_id').val(r.id);
				$('#color').val(r.color); 
				$('#unit_cost').val(r.unit_cost); 
				$('#model').val(r.model);
				$('#itemcategory_id').val(r.itemcategory_id);
				$('#itemtype_id').val(r.itemtype_id);
				$('#currency_id').val(r.currency_id);
				$('#brand_id').val(r.brand_id); 
			}else{
				$('#item_id').val("");
				$('#color').val(""); 
				$('#unit_cost').val(""); 
				$('#model').val("");
				$('#itemcategory_id').val(0);
				$('#itemtype_id').val(0);
				$('#currency_id').val(0);
				$('#brand_id').val(0); 
			}
        }
    });
});
   

</script>
