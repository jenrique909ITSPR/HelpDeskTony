<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Form->create($itemcode) ?>
<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('Cancel'), ['action' => 'index']) ?></li>
		</ul>
</div>
<div class="itemcodes form">

<div class="easyui-layout" style="width:100%;height:500px;">
		<div data-options="region:'north', collapsible:false" title="<?= __('Invoice') ?>" style="height: 27%; padding: 10px;">
			<table class="tableTransparent" cellpadding="3" cellspacing="3" style="width:auto;">
					<tr><td  style="width:5%;"><?= $this->form->label(__('invoice_number')) ?></td><td><?=  $this->Form->control('invoices.invoice_number', ['type' => 'text', 'empty' => true , 'label' => false ,'value' => $itemcode->has('invoice') ? $itemcode->invoice->invoice_number : '']); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('purchaseorder')) ?></td><td><?=  $this->Form->control('invoices.purchaseorder_id', ['type' => 'text', 'empty' => true , 'label' => false,'value' => $itemcode->has('invoice') ? $itemcode->invoice->purchaseorder_id :'' ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('date')) ?></td><td><?=  $this->Form->created('invoices.invoicedate', ['type' => 'date', 'empty' => true , 'label' => false ,'value' => $itemcode->has('invoice') ? $itemcode->invoice->invoicedate : '' ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('amount')) ?></td><td><?=  $this->Form->control('invoices.amount', ['type' => 'number', 'empty' => true , 'label' => false ,'value' => $itemcode->has('invoice') ? $itemcode->invoice->amount : '']); ?></td></tr>
					<tr>
					<td  style="width:5%;"><?= $this->form->label(__('supplier')) ?></td><td><?=  $this->Form->control('invoices.supplier_id', [ 'empty' => true , 'label' => false, 'type' => 'text' ,'value' => $itemcode->has('invoice') ? $itemcode->invoice->supplier_id :'' ]); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('currency')) ?></td><td><?=  $this->Form->control('invoices.currency_id', [ 'empty' => true , 'label' => false , 'options' => $currencies ,'value' => $itemcode->has('invoice') ? $itemcode->invoice->currency_id:'']); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('warehouse')) ?></td><td><?=  $this->Form->control('invoices.warehouse_id', [ 'empty' => true , 'label' => false , 'options' => $warehouses ,'value' => $itemcode->has('invoice') ? $itemcode->invoice->warehouse_id:'']); ?></td>
					<td  style="width:5%;"><?= $this->form->label(__('empresa')) ?></td><td><?=  $this->Form->control('invoices.company_id', [ 'type' => 'text','empty' => true , 'label' => false ,'value' => $itemcode->has('invoice') ? $itemcode->invoice->company_id:'']); ?></td></tr>
			</table>

		</div>
		<div data-options="region:'east',split:true,collapsible:false" title="<?= __('Serials') ?>" style="width:250px; padding: 5px 5px;">
				<!--<i class="fa fa-barcode"></i>-->
				<table class="tableTransparent" cellpadding="0" cellspacing="0" style="">
					<tr>
						<td class="inputSerialQTY"><input type="text" name="serialqty" class="" style="width: 20px"></td>
						<td colspan="2"><i class="fa fa-barcode"></i><input type="text" name="" class="inputSerial" form=""></input></td>
					</tr>
				</table>
				<table class="" cellpadding="0" cellspacing="0" style="">
					<tbody id="bodyserials"></tbody>
				</table>

		</div>
		<div data-options="region:'center', collapsible:false" title="<?= __('Assets') ?>" style="padding: 5px 5px;">
			<table class="tableTransparent" cellpadding="4" cellspacing="5" style="width:auto;">
								<tr>
							<td style="width:5%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td colspan="5">
								<?= $this->Form->control('item_id',['id'=>'cg','label'=> false,'style'=> "width:100%;" , 'type' => 'text']);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('itemcategory')) ?>
							</td>
							<td width="33%">
									<?php  echo $this->Form->control('items.itemcategory_id', ['options' => $itemcategories, 'empty' => true,'label'=> false,'id' => 'itemcategory_id','readonly']);?>
							</td>
							<td width="7%">
								<?= $this->form->label(__('itemtype')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.itemtype_id', ['options' => $itemtypes,'label'=> false,'id' => 'itemtype_id','readonly']);?>
							</td>

						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('brand')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.brand_id', ['options' => $brands,'label'=> false, 'id'=>'brand_id','readonly']);?>
							</td>
							<td>
								<?= $this->form->label(__('model')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.model', ['id'=> 'model' ,'label'=> false,'readonly']);?>
							</td>
							<td>
								<?= $this->form->label(__('color')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.color', ['id'=>'color' ,'label'=> false,'readonly']);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('unit_cost')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('items.unit_cost', ['id' => 'unit_cost', 'label'=> false,'readonly']);?>
							</td>
							<td>
								<?= $this->form->label(__('currency')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('items.currency_id', ['options' => $currencies,'label'=> false, 'id' => 'currency_id','readonly']);?>
							</td>

						</tr>

						<tr >
							<td style="width:5%;"><?= $this->form->label(__('Warranty')) ?></td>
							<td colspan="1"><?=  $this->Form->created('warranty', ['label' => false,'empty' => true, 'type'=> 'date']); ?></td>
							<td><?= $this->form->label(__('Service tag')) ?></td>
							<td><?= $this->Form->control('service_tag',['label' => false]); ?></td>
							<td><input type="checkbox" name="" class="serialGeneric"/> Serial generico</td>
						</tr>
						<tr><td> <a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#w').window('open')">Add new Item</a></td></tr>
			</table>

		</div>

</div>
</div>
<div id="w" class="easyui-window" title="<?= h(__('Item'))  ?>" data-options="modal:true,closed:true,iconCls:'icon-save'" style="width:80%;height:60%;padding:10px;">

  <div id="contentAjax2">
    <?= $this->fetch('content') ?>
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
<script type="text/javascript">
	var myArray = [];
	$('.inputSerial').keypress(function (e) {
		//e.preventDefault();
		if(e.which ==13 && inputSerial != '') {
			var inputSerial = $('.inputSerial').val();
			$.ajax({
	        type: 'GET',
	        url: '<?= $this->Url->build(['controller' => 'Itemcodes', 'action' => 'verify']) ?>',
	        data: 'q='+inputSerial,
	        success: function(data) {
	        if (data == 0) {
						var html = $('.inputTemplate:first').clone();
						var addserial = '<tr class="inputTemplate"><td><input type="text" name="itemcodes[]serial" class="serial" value="' + inputSerial + '"/></td><td><a href="#" class="removeinput"><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>';
						$('#bodyserials').prepend(addserial);
						$('.inputSerial').val('');
						displayAction();
					}else{
						 $.messager.alert('Error de serie','El numero de serie ingresado ya existe','error');
						 $('.inputSerial').val('');
					}
      		}
	     });

			}


	});
	$('#bodyserials').on("click",".removeinput", function(e){ //user click on remove text
        e.preventDefault();
		$(this).parents('.inputTemplate').remove();
		countRows();
		displayAction();
    })

		$(".inputSerialQTY").hide();
		$('.serialGeneric').change(function() {
				if($(".serialGeneric").is(':checked'))
				    $(".inputSerialQTY").show();  // checked
				else
				    $(".inputSerialQTY").hide();  // unchecked
    });

</script>
<script type="text/javascript">
$(document).ready(function(){


    var cargando = $("#contentAjax").html("<div class='loading'></div>");
    $.ajax({
        type: 'GET',
        url: '<?= $this->Url->build(['controller' => 'Items', 'action' => 'add']) ?>',
        //data: $('#envia').serialize(),
        beforeSend: function() {
            cargando.show();
        },
        success: function(data) {
          $('#contentAjax2').html(data);
      }});

});
</script>
