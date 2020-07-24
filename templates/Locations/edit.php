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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $location->LOCATION_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $location->LOCATION_ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locations form content">
            <?= $this->Form->create($location) ?>
            <fieldset>
                <legend><?= __('Edit Location') ?></legend>
                <?php
                    echo $this->Form->control('STREET_ADDRESS');
                    echo $this->Form->control('POSTAL_CODE');
                    echo $this->Form->control('CITY');
                    echo $this->Form->control('STATE_PROVINCE');
                    echo $this->Form->control('COUNTRY_ID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
