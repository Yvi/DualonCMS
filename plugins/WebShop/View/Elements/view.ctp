<!-- Web-Shop product detail view -->
<?php 	
	//INTEGRATE searchbar
	echo $this->element('SearchBar', array('url' => $url));
	
	//CREATE product details
	echo '<div id="webshop_detailview">';
	echo $this->Html->image('/WebShop/img/products/'.$data['WebshopProduct']['picture'], array('class' => "webshop_detailview_image", 'style' => "margin-right: 10px"));
	echo '<h2>'.$data['WebshopProduct']['name'].'</h2>';
	
	echo '<table class="webshop_infobox">';
	echo '<tr>';
		echo '<td class="websop_price" style="float: left">Preis: '.$data['WebshopProduct']['price'].' '.$data['WebshopProduct']['currency'].'</td>';
		echo '<td style="padding-left:20px">'.$this->Html->image('/WebShop/img/Cart-Add-32.png', array('url' => $url.'/webshop/add/'.$data['WebshopProduct']['id'], 'class' => "webshop_cart_icon")).'</td>';
	echo '</tr>';
	echo '</table>';
	
	echo '<br style="clear:left">';
	$this->Helpers->load('BBCode');
	echo $this->BBCode->transformBBCode($data['WebshopProduct']['description']);
	echo '</div>';