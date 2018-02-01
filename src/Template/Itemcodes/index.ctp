<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Itemcode[]|\Cake\Collection\CollectionInterface $itemcodes  */
?>

<div class="itemcodes index">
    <fieldset class="searchform">
    <legend>Filtros</legend>
    <?= $this->Form->create('search') ?>
    <table class="tableTransparent">
      <tr>
        <td style="width: 20%;>
            <?= $this->Form->control('Items.%name',['label' => false,
                'class' => 'easyui-combobox',
                'data-options' => "loader: myloader,mode: 'remote',valueField: 'text',textField: 'text',label: 'Item:',labelPosition: 'top'",
                'style'=>"width:100%;" 
            ]); ?>
            </td>
        <td><?= $this->Form->control('%serial',['label' => 'Serial']); ?></td>
        <td><?= $this->Form->control('invoice_id', ['options' => $invoices , 'empty' => true]); ?></td>
        <td><?= $this->Form->control('statusitem_id', ['options' => $statusitems , 'empty' => true]); ?></td>
        <td><?= $this->Form->control('branch_id', ['empty' => true]); ?></td>
        <td><?= $this->Form->control('insured_id',['empty' => true , 'options' => $insureds]) ?></td>
      </tr>
    </table>
      <!--<?= $this->Form->control('itemcategory_id', ['options' => $itemcategories, 'empty' => true]); ?>
          <?= $this->Form->control('brand_id', ['options' => $brands, 'empty' => true]); ?>
          <?= $this->Form->control('DatePurcharse'); ?>-->
    <?= $this->Form->button(__('Search')) ?>
    <?= $this->Form->end() ?>
    
  </fieldset>
    <h3><?= __('Itemcodes') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Itemcode'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusitem_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('warranty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('positionbranch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_tag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currency_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('insured') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemcodes as $itemcode): ?>
            <tr>
                <td><?= $this->Number->format($itemcode->id) ?></td>
                <td><?= $itemcode->has('item') ? $this->Html->link($itemcode->item->name, ['controller' => 'Items', 'action' => 'view', $itemcode->item->id]) : '' ?></td>
                <td><?= h($itemcode->serial) ?></td>
                <td><?= $itemcode->has('invoice') ? $this->Html->link($itemcode->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $itemcode->invoice->id]) : '' ?></td>
                <td><?= $itemcode->has('statusitem') ? $this->Html->link($itemcode->statusitem->name, ['controller' => 'Statusitems', 'action' => 'view', $itemcode->statusitem->id]) : '' ?></td>
                <td><?= h($itemcode->created) ?></td>
                <td><?= h($itemcode->warranty) ?></td>
                <td><?= $itemcode->has('positionbranch') ? $this->Html->link($itemcode->positionbranch->name, ['controller' => 'Positionbranches', 'action' => 'view', $itemcode->positionbranch->id]) : '' ?></td>
                <td><?= h($itemcode->service_tag) ?></td>
                <td><?= $this->Number->format($itemcode->cost) ?></td>
                <td><?= $itemcode->has('currency') ? $this->Html->link($itemcode->currency->name, ['controller' => 'Currencies', 'action' => 'view', $itemcode->currency->id]) : '' ?></td>
                <td><?= $itemcode->has('insured') ? $this->Html->link($itemcode->insured->name, ['controller' => 'Insureds', 'action' => 'view', $itemcode->insured->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemcode->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemcode->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcode->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
<script type="text/javascript">
  
        var myloader = function(param,success,error){
            var q = param.q || '';
            if (q.length <= 2){return false}
            $.ajax({
                url: '<?= $this->Url->build(['controller' => 'Items', 'action' => 'loaditems']) ?>',
                dataType: 'json',
                data: {
                    q: q
                },
                success: function(data){
                    var items = $.map(data, function(item,index){
                        return {
                            id: index,
                            text : item
                        };
                    });
                    success(items);
                },
                error: function(){
                    error.apply(this, arguments);
                }
            });
        }
</script>