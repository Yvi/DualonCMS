<?php $this->Html->css('menu-design', NULL, array('inline' => false));?>

<?php $this->Html->css('menu-template', NULL, array('inline' => false));?>

<div id="menu" class="overlay">

    <ol class="nav">

        <li><?php echo $this->Html->link('Produkte verwalten',array('controller' => 'WebShop', 'action' => 'admin', $contentID));?></li>
        
        <li><?php echo $this->Html->link('Offene Bestellungen',array('controller' => 'WebShop', 'action' => 'openOrders', $contentID));?></li>

        <li><?php echo $this->Html->link('Einstellungen',array('controller' => 'WebShop', 'action' => 'setContentValues', $contentID));?></li>

    </ol>

    <div style="clear:both;"></div>

</div>

