<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmoves form">
	<h3><?= __('Solicitud de Remplazo'). ' - Ticket # '. $ticket->id . ' - '. $ticket->title ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('Cancel'), ['controller' =>'Tickets', 'action' => 'enduserindex']) ?> </li>
		</ul>
	</div>
	<div class="editdata">
    <?= $this->Form->create($stockmove) ?>
		
		
	<div class="easyui-layout" style="width:100%;height:400px;">
        <div data-options="region:'east',split:false,title:'Series',collapsible:false" style="width:500px;padding: 5px;">
        	<div>

				<i class="fa fa-barcode"></i>
			  <input type="text" name="" class="inputSerial" form=""></input>
				<table class="" cellpadding="0" cellspacing="0" style="width: 100%">
					<thead>
						<tr>
							<th><?= __('Serial') ?></th>
							<th><?= __('Name') ?></th>
							<th><?= __('Reason') ?></th>
							<th colspan='2'></th>
						</tr>
					</thead>
					<tbody id="bodyserials"></tbody>
				</table>
			</div>
			

        </div>
        <div data-options="region:'center',title:'Stockmoves',iconCls:'icon-ok'" style="padding:10px">

        	<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<!--<tr>
							<td>
								<?= $this->form->label(__('user')) ?>
							</td>
							<td >
									<?php   echo $this->Form->control('user_id', ['options' => $users, 'empty' => true,'label'=> false]);?>
							</td>
							
						</tr>-->
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('warehouse_send')) ?>
							</td>
							<td width="40%">
								<?php  echo $this->Form->control('warehouse_id',['empty' => true,'label'=> false,]);?>
							</td>
							<td width="9%">
								<?= $this->form->label(__('warehouse_receives')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('warehouse_2', ['options' => $warehouses,  'value' => 299,'empty' => true,'label'=> false]);?>
							</td>
						</tr>
							<tr>
							<td>
								<?= $this->form->label(__('user receiver')) ?>
							</td>
							<td>
									<?php echo $this->Form->control('receiver',['type'=> 'text','label'=> false]);?>
							</td>
							<td >
							<?= $this->form->label(__('Medio de Envio')) ?>
							</td>
							<td colspan="2"> 
									<?php   echo $this->Form->control('shipper_id', ['options' => $shippers, 'empty' => true,'label'=> false]);?>
							</td>
							<!--<td width="7%">
								<?= $this->form->label(__('movereason')) ?>
							</td>
							<td colspan="5">
								<?php echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true,'label'=> false]);?>
							</td>-->
							<!--<td>
								<?= $this->form->label(__('user receiver_sign')) ?>
							</td>
							<td colspan="3">
									<?php echo $this->Form->control('receiver_sign',['label'=> false]);?>
							</td>-->
						</tr>

						<tr>
						
						<td>
							<?= $this->form->label(__('guide_number')) ?>
						</td>
						<td >
								<?php echo $this->Form->control('guide_number',['label'=> false]);?>
						</td>
						<td>
							<?= $this->form->label(__('packages')) ?>
						</td>
						<td colspan="2">
								<?php echo $this->Form->control('packages',['label'=> false]);?>
						</td>
					</tr>
					<tr>
					
				</tr>
				<tr>
				
				<!--<td>
					<?= $this->form->label(__('confirmed')) ?>
				</td>
				<td>
						<?php   echo $this->Form->control('confirmed',['label'=> false]);?>
				</td>-->
			</tr>
			<tr>
				<td>
					<?= $this->form->label(__('notes')) ?>
				</td>
				<td colspan="2">
						<?php   echo $this->Form->control('notes',['label'=> false, 'style' => ' resize: none;']);?>
				</td>
				<td style="width:7%;">
					<?= $this->form->label(__('estimated deliverydate')) ?>
				</td >
				<td style="width:20%;">
					<?php  echo $this->Form->created('deliverydate',['type' => 'date' , 'style' => 'width:80%;', 'label'=>false]);?>
				</td>
			</tr>
				</tbody>
		</table>
		<?= $this->Form->button(__('Submit')) ?>
        </div>
    </div>
    
    <?= $this->Form->end() ?>
	</div>
</div>
<script type="text/javascript">
	$('.inputSerial').keypress(function (e) {
		//e.preventDefault();
		var inputSerial = $('.inputSerial').val();
    if(e.which ==13 && inputSerial != '') {
			//var html = $('.inputTemplate:first').clone();
			$.ajax({
	        type: 'GET',
	        url: '<?= $this->Url->build(['controller' => 'Itemcodes', 'action' => 'showitem']) ?>',
	        data: 'q='+inputSerial,
	        success: function(data) {
		        if (data != 0) {
							//var html = $('.inputTemplate:first').clone();
							var addserial = '<tr class="inputTemplate"><td><input type="text" name="stockmoves_details[serial][]" class="serial" value="' + inputSerial + '"/></td><td><input type="text" name="items[]name" class="serial" value=' + data + '/></td><td><input type="text" name="stockmoves_details[reason][]" class="serial" value=""/></td><td><a href="#" class="removeinput"><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>';
							$('#bodyserials').prepend(addserial);
							$('.inputSerial').val('');
							//displayAction();
						}else{
							 $.messager.alert('Error de serie','El numero de serie ingresado NO existe','error');
							 $('.inputSerial').val('');
						}
      		}
	     });
		}
	});
	$('#bodyserials').on("click",".removeinput", function(e){ //user click on remove text
        e.preventDefault(); 
		$(this).parents('.inputTemplate').remove(); 
    });

	$("#movetype").on('click',function()
	{
		if ($("#movetype:checked").length == 0){

			$("#parent_id").css("display", "none");
		}else{
			$("#parent_id").css("display","block");
		}
		
	});
	$( "#movetype" ).on( "click", function() {
	  $( "#log" ).html( $( "input:checked" ).val() + " is checked!" );
	});
	


</script>
