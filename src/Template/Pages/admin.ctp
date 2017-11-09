<? $this->assign('title', 'Administration'); ?>

<nav class="navleft" id="admin">
    <ul class="side-nav">
        <li class="heading"><i class="fa fa-ticket" aria-hidden="true"></i> <?= __('Tickets') ?></li>
        <li class="divider"></li>
        <li><?= $this->Html->link(__('Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ticket Statuses'), ['controller' => 'Ticketstatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ticketimpacts'), ['controller' => 'Ticketimpacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ticketurgencies'), ['controller' => 'Ticketurgencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ticketpriorities'), ['controller' => 'Ticketpriorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Internalnotes'), ['controller' => 'Internalnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Publicnotes'), ['controller' => 'Publicnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ticketsfiles'), ['controller' => 'Ticketsfiles', 'action' => 'index']) ?></li>

        <li class="divider"></li>
        <li class="heading"><i class="fa fa-cubes" aria-hidden="true"></i> <?= __('Items') ?></li>
        <li class="divider"></li>
        <li><?= $this->Html->link(__('Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li class="divider"></li>

        <li class="heading"><i class="fa fa-users" aria-hidden="true"></i> <?= __('Users') ?></li>
        <li class="divider"></li>
        <li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li class="divider"></li>

        <li class="heading"><i class="fa fa-home" aria-hidden="true"></i> <?= __('Branches') ?></li>
        <li class="divider"></li>
        <li><?= $this->Html->link(__('Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li class="divider"></li>

        <li class="heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <?= __('Articles') ?></li>
        <li class="divider"></li>
        <li><?= $this->Html->link(__('List Articlefiles'), ['controller' => 'Articlefiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li class="divider"></li>
    </ul>
</nav>
