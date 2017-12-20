<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Article $article  */
?>

<div class="articles view">
    <h3><?= h($article->title) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($article->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $article->has('user') ? $this->Html->link($article->user->name, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selected') ?></th>
            <td><?= $this->Number->format($article->selected) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($article->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($article->created) ?></td>
        </tr>
    </table>
	</div>
    <div class="row">
        <h4><?= __('Answer') ?></h4>
        <?= $this->Text->autoParagraph(h($article->answer)); ?>
    </div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Articlefiles') ?>">
        <h4><?= __('Related Articlefiles') ?></h4>
        <?php if (!empty($article->articlefiles)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Article Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($article->articlefiles as $articlefiles): ?>
            <tr>
                <td><?= h($articlefiles->id) ?></td>
                <td><?= h($articlefiles->name) ?></td>
                <td><?= h($articlefiles->article_id) ?></td>
                <td><?= h($articlefiles->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articlefiles', 'action' => 'view', $articlefiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articlefiles', 'action' => 'edit', $articlefiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articlefiles', 'action' => 'delete', $articlefiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlefiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Hdcategories Articles') ?>">
        <h4><?= __('Related Hdcategories Articles') ?></h4>
        <?php if (!empty($article->hdcategories_articles)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Hdcategory Id') ?></th>
                <th scope="col"><?= __('Article Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($article->hdcategories_articles as $hdcategoriesArticles): ?>
            <tr>
                <td><?= h($hdcategoriesArticles->id) ?></td>
                <td><?= h($hdcategoriesArticles->hdcategory_id) ?></td>
                <td><?= h($hdcategoriesArticles->article_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HdcategoriesArticles', 'action' => 'view', $hdcategoriesArticles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HdcategoriesArticles', 'action' => 'edit', $hdcategoriesArticles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HdcategoriesArticles', 'action' => 'delete', $hdcategoriesArticles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdcategoriesArticles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Roles') ?>">
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($article->roles)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($article->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id) ?></td>
                <td><?= h($roles->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
