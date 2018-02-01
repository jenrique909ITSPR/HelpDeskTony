<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmoves form">
	<h3><?= __('Add Stockmove') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stockmoves'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	<div class="editdata">
    <?= $this->Form->create($stockmove) ?>
		
		
	<div class="easyui-layout" style="width:100%;height:700px;">
        <div data-options="region:'east',split:true,title:'Series',collapsible:false" style="width:450px;">
        	<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('qty')) ?>
							</td>
							<td style="width:17%;">
									<?php  echo $this->Form->control('qty', ['type' => 'number','label'=> false]);?>
							</td style="width:7%;">
							
						</tr>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('itemcode')) ?>
							</td>
							<td style="width:17%;">
								<?php  echo $this->Form->control('itemcode_id', ['id' => 'itemcode_id' ,'type'=> 'text' ,'label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('item')) ?>
							</td>
							<td style="width:17%;">
									<?php  echo $this->Form->control('item_id', ['id'=>'item_id', 'label'=> false,'type'=> 'text', 'disabled']);?>
							</td>
						</tr>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('reason')) ?>
							</td>
							<td style="width:17%;"><?= $this->Form->control('reason',['label' => false])  ?></td>
						</tr>
						<tr>
							<td><input id='additem' type="button" ></td>
						</tr>
				</tbody>
			</table>
			<table id="itemcodestable" class="display" width="100%" cellspacing="0">
		        <thead>
		            <tr>
		                <th>Serie</th>
		                <th>Item</th>
		                <th>Motivo</th>
		                <th>Cantidad</th>
		            </tr>
		        </thead>
		    </table>

        </div>
        <div data-options="region:'center',title:'Stockmoves',iconCls:'icon-ok'" style="padding:10px">
        	<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td>
								<?= $this->form->label(__('user')) ?>
							</td>
							<td >
									<?php   echo $this->Form->control('user_id', ['options' => $users, 'empty' => true,'label'=> false]);?>
							</td>
							<td style="width:7%;">
								<?= $this->form->label(__('deliverydate')) ?>
							</td >
							<td style="width:20%;">
								<?php  echo $this->Form->control('deliverydate',['type' => 'text' , 'class' => 'easyui-datetimebox', 'style' => 'width:80%;', 'label'=>false]);?>
							</td>
						</tr>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('warehouse send')) ?>
							</td>
							<td width="40%">
								<?php  echo $this->Form->control('warehouse_id',['options' => $warehouses, 'empty' => true,'label'=> false]);?>
							</td>
							<td width="9%">
								<?= $this->form->label(__('warehouse receives')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('warehouse_2', ['options' => $warehouses, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
							<tr>
							<td>
								<?= $this->form->label(__('user receiver')) ?>
							</td>
							<td>
									<?php echo $this->Form->control('receiver',['type'=> 'text','label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('user receiver_sign')) ?>
							</td>
							<td colspan="3">
									<?php echo $this->Form->control('receiver_sign',['label'=> false]);?>
							</td>
						</tr>
							<tr>
							<td width="7%">
								<?= $this->form->label(__('movereason')) ?>
							</td>
							<td colspan="5">
								<?php echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
						<tr>
						<td>
							<?= $this->form->label(__('shipper')) ?>
						</td>
						<td>
								<?php   echo $this->Form->control('shipper_id', ['options' => $shippers, 'empty' => true,'label'=> false]);?>
						</td>
						<td>
							<?= $this->form->label(__('guide_number')) ?>
						</td>
						<td>
								<?php echo $this->Form->control('guide_number',['label'=> false]);?>
						</td>
						<td>
							<?= $this->form->label(__('packages')) ?>
						</td>
						<td>
								<?php echo $this->Form->control('packages',['label'=> false]);?>
						</td>
					</tr>
					<tr>
					
				</tr>
				<tr>
				<td>
					<?= $this->form->label(__('parent')) ?>
				</td>
				<td colspan="3">
						<?php   echo $this->Form->control('parent_id',['label'=> false]);?>
				</td>
				<td>
					<?= $this->form->label(__('confirmed')) ?>
				</td>
				<td>
						<?php   echo $this->Form->control('confirmed',['label'=> false]);?>
				</td>
			</tr>
			<tr>
			<td>
				<?= $this->form->label(__('notes')) ?>
			</td>
			<td colspan="5">
					<?php   echo $this->Form->control('notes',['label'=> false]);?>
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
	$("#itemcode_id").on("input", function(e) {
		value = $('#itemcode_id').val();
        $.ajax({
                type: 'GET',
                url: '<?= $this->Url->build(['controller' => 'Itemcodes', 'action' => 'showitem'])  ?>',
                data:  'q='+value,
                beforeSend: function() {
              //             cargando.show();
                },
                success: function(data) {
                        $('#item_id').attr('value',data);

                }
            });
    });


	$('#additem').click(function() {
	    $("#itemcodestable").last().append("<tr><td>"+$('#itemcode_id').val()+"</td><td>"+$('#item_id').val()+"</td><td>"+$('#reason').val()+"</td><td>"+$('#qty').val()+"</td></tr>");
 		$('#itemcode_id').val("");
	});


</script>
