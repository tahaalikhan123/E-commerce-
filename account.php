<?php
//require
require "common.php";
include "src/templates/account.php";

page_for_customer(); // for logged customer only

$title = "My Account";

// generate HTML
generate_header($title, $in_cart_common);
generate_page_title($title);

generate_account_default();

generate_footer();

