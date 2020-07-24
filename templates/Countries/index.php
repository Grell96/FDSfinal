<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country[]|\Cake\Collection\CollectionInterface $countries
 */
?>
<div class="countries index content">
    <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Countries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('COUNTRY_ID') ?></th>
                    <th><?= $this->Paginator->sort('COUNTRY_NAME') ?></th>
                    <th><?= $this->Paginator->sort('REGION_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($countries as $country): ?>
                <tr>
                    <td><?= h($country->COUNTRY_ID) ?></td>
                    <td><?= h($country->COUNTRY_NAME) ?></td>
                    <td><?= $this->Number->format($country->REGION_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $country->COUNTRY_ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->COUNTRY_ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->COUNTRY_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $country->COUNTRY_ID)]) ?>
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
