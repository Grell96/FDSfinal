<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->REGION_NAME], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->REGION_NAME], ['confirm' => __('Are you sure you want to delete # {0}?', $region->REGION_NAME), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Regions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Region'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="regions view content">
            <h3><?= h($region->REGION_NAME) ?></h3>
            <table>
                <tr>
                    <th><?= __('REGION NAME') ?></th>
                    <td><?= h($region->REGION_NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('REGION ID') ?></th>
                    <td><?= $this->Number->format($region->REGION_ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
