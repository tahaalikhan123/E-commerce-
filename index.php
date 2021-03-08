<?php
//require
require "common.php";
include "src/templates/home.php";
include "src/templates/products.php";
include "src/logic/products.php";

// Get Data
$featured_data = get_featured_data(5);
$recommended_data = get_recommended_data(get_user_id());


// generate HTML

generate_header("Home", $in_cart_common);
generate_slider($featured_data);
generate_recomendation($recommended_data);
generate_footer();
