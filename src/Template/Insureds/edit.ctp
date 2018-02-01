<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="insureds form">
	<h3><?= __('Edit Insured') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Insureds'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($insured) ?>
        <?php
            echo $this->Form->control('name');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $insured->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $insured->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Insureds'), ['action' => 'index']) ?></li>
    </ul>
</nav>