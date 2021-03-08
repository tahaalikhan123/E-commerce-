<?php
//require
require "common.php";

// You must allow only to staff to delete product
page_for_staff();

    // connect to mongodb server
    $collection = (new MongoDB\Client)->ecomerce->products;

if (isset($_GET['delete_pro_id'])) {
	$proID = $_GET['delete_pro_id'];

	/// this query is not working as well Not getting proID 
	$remProduct = [
        "_id" =>  new MongoDB\BSON\ObjectID($proID)
	];

	$deleteProduct = $collection->deleteOne($remProduct);

	if($deleteProduct->getDeletedCount()==1) {
		set_success('Product removed');
	} else {
		set_error('Error deleting product');
	}

	header("Location: manage_products.php");
	exit();

}
