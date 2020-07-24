<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location[]|\Cake\Collection\CollectionInterface $locations
 */
?>
<div class="locations index content">
    <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Locations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('LOCATION_ID') ?></th>
                    <th><?= $this->Paginator->sort('STREET_ADDRESS') ?></th>
                    <th><?= $this->Paginator->sort('POSTAL_CODE') ?></th>
                    <th><?= $this->Paginator->sort('CITY') ?></th>
                    <th><?= $this->Paginator->sort('STATE_PROVINCE') ?></th>
                    <th><?= $this->Paginator->sort('COUNTRY_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($locations as $location): ?>
                <tr>
                    <td><?= $this->Number->format($location->LOCATION_ID) ?></td>
                    <td><?= h($location->STREET_ADDRESS) ?></td>
                    <td><?= h($location->POSTAL_CODE) ?></td>
                    <td><?= h($location->CITY) ?></td>
                    <td><?= h($location->STATE_PROVINCE) ?></td>
                    <td><?= h($location->COUNTRY_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $location->LOCATION_ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->LOCATION_ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->LOCATION_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $location->LOCATION_ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
