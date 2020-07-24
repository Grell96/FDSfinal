<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->COUNTRY_ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->COUNTRY_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $country->COUNTRY_ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->COUNTRY_ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('COUNTRY ID') ?></th>
                    <td><?= h($country->COUNTRY_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('COUNTRY NAME') ?></th>
                    <td><?= h($country->COUNTRY_NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('REGION ID') ?></th>
                    <td><?= $this->Number->format($country->REGION_ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
