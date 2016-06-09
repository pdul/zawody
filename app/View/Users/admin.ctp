<div class="users index">
	<h2>Lista zapisanych zawodników</h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name','imię'); ?></th>
			<th><?php echo $this->Paginator->sort('surname','nazwisko'); ?></th>
			<th><?php echo $this->Paginator->sort('age','wiek'); ?></th>
			<th><?php echo $this->Paginator->sort('addres','adres'); ?></th>
			<th><?php echo $this->Paginator->sort('email','email'); ?></th>
			<th><?php echo $this->Paginator->sort('category','kategoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['surname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['age']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addres']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['category']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<h3>Rejestracja</h3>
        <?php
            if(count($all) < 5){ 
        ?>
	<ul>
		<li><?php echo $this->Html->link("Zapisz się", array('action' => 'add')); ?></li>
	</ul>
        
        <?php
            }else {
                echo 'Zamknięta';
            }
        ?>
        <h3>Wolne miejsca</h3>
        <?php
        echo 5 - count($all);
        ?>
</div>
