<?php

function get_list_view_html($product_id, $product){

	$output = "";
		$output = $output . "<li>";
		$output = $output . '<a href="Shirt.php?id='. $product_id . '">';
		$output = $output . '<img src="' .  $product["img"] . '" alt="' . $product["name"] . '">';
		$output = $output . "<p>View Details</p>";
		$output = $output . "</a>";
		$output = $output . "</li>";
		return $output;


}



$products = array();
// we can specify a number inside the bracket if we want, which we can use as a product sku.
$products[101] = array(
	"name" => "Logo Shirt, Red",
	"price" => 18,
	"img" => "img/shirts/shirt-101.jpg",
	"paypal" => "AUCJFAAP7K5H4",
	"sizes" => array("Small", "Medium", "Large", "X-Large"),
);
$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
	"price" => 18,
	"img" => "img/shirts/shirt-102.jpg",
	"paypal" => "UEZMB47F98B6L",
	"sizes" => array("Small", "Medium"),
);
$products[103] = array(
	"name" => "Mike the Frog Shirt, Blue",
	"price" => 18,
	"img" => "img/shirts/shirt-103.jpg",
	"paypal" => "JPVH45EUTG982",
	"sizes" => array("Small", "Medium", "Large"),
);
$products[104] = array(
	"name" => "Logo Shirt, Green",
	"price" => 18,
	"img" => "img/shirts/shirt-104.jpg",
	"paypal" => "3DJKV2XW4NNAN",
	"sizes" => array("Small", "Medium", "Large", "X-Large"),
);
$products[105] = array(
	"name" => "Mike the Frog, Green",
	"price" => 18,
	"img" => "img/shirts/shirt-105.jpg",
	"paypal" => "PBSJZ3KXUKPKE",
	"sizes" => array("Small", "Medium", "Large", "X-Large"),
);
$products[106] = array(
	"name" => "Logo Shirt, Grey",
	"price" => 18,
	"img" => "img/shirts/shirt-106.jpg",
	"paypal" => "6EK45XDLSP4MA",
	"sizes" => array("Small", "Medium", "Large", "X-Large"),
);
$products[107] = array(
	"name" => "Logo Shirt, Light Blue",
	"price" => 18,
	"img" => "img/shirts/shirt-107.jpg",
	"paypal" => "4FJLA83M6BRF6",
	"sizes" => array("Small", "Medium", "Large", "X-Large"),
);
$products[108] = array(
	"name" => "Mike the Frog, Orange",
	"price" => 18,
	"img" => "img/shirts/shirt-108.jpg",
	"paypal" => "525WCTBJV3SLN",
	"sizes" => array("Small", "Medium", "Large", "X-Large"),
);



?>