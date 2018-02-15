<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmoves form">
	<h3><?= __('Stockmove Direct') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stockmoves'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	<div class="editdata">
    <?= $this->Form->create($stockmove) ?>

    	<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<fieldset data-role="controlgroup">
					      <legend>Escoge un tipo de Movimiento:</legend>
					        <input type="radio" name="movereason_id" id="Baja" value="1">
					        <label for="Baja">Baja</label>
					        <input type="radio" name="movereason_id" id="Transferencia" value="7">
					        <label for="Transferencia">Transferencia</label>
					        <input type="radio" name="movereason_id" id="garantia" value="2">
					        <label for="garantia">Salida a Garantia</label>
					        <input type="radio" name="movereason_id" id="servicio" value="9">
					        <label for="servicio">Salida a Servicio</label>
					      </fieldset>
						
						</tr>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('warehouse send')) ?>
							</td>
							<td width="40%">
								<?php  echo $this->Form->control('warehouse_id',['options' => $warehouses, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td width="9%">
								<?= $this->form->label(__('warehouse receives')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('warehouse_2', ['options' => $warehouses, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
						<!--<tr>
							<td width="7%">
								<?= $this->form->label(__('movereason')) ?>
							</td>
							<td colspan="5">
								<?php echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>-->
					</tbody>
				</table>

			<div>
				<i class="fa fa-barcode"></i>
			  <input type="text" name="" class="inputSerial" form=""></input>
				<table class="" cellpadding="0" cellspacing="0" style="width: 100%">
					<thead>
						<tr>
							<th><?= __('Serial') ?></th>
							<th><?= __('Name') ?></th>
							<th><?= __('Action') ?></th>
							<th colspan='2'></th>
						</tr>
					</thead>
					<tbody id="bodyserials"></tbody>
				</table>
			</div>
			<?php   echo $this->Form->control('notes');?>

	</div>
<br>
		<?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

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
							var addserial = '<tr class="inputTemplate"><td><input type="text" name="stockmoves_details[serial][]" class="serial" value="' + inputSerial + '"/></td><td><input type="text" name="items[]name" class="serial" value=' + data + '/></td><td><a href="#" class="removeinput"><i class="fa fa-times" aria-hidden="true"></i></a></td><td>Motivo</td><td><input type="text" name="stockmoves_details[reason][]" class="serial" value=""/></td></tr>';
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
