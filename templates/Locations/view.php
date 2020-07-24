<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->LOCATION_ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->LOCATION_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $location->LOCATION_ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locations view content">
            <h3><?= h($location->LOCATION_ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('STREET ADDRESS') ?></th>
                    <td><?= h($location->STREET_ADDRESS) ?></td>
                </tr>
                <tr>
                    <th><?= __('POSTAL CODE') ?></th>
                    <td><?= h($location->POSTAL_CODE) ?></td>
                </tr>
                <tr>
                    <th><?= __('CITY') ?></th>
                    <td><?= h($location->CITY) ?></td>
                </tr>
                <tr>
                    <th><?= __('STATE PROVINCE') ?></th>
                    <td><?= h($location->STATE_PROVINCE) ?></td>
                </tr>
                <tr>
                    <th><?= __('COUNTRY ID') ?></th>
                    <td><?= h($location->COUNTRY_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('LOCATION ID') ?></th>
                    <td><?= $this->Number->format($location->LOCATION_ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
