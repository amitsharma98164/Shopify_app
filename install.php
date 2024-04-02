<?php

// Set variables for our request
$shop = "amittes";
$api_key = "02e60235d14524b3b6ab3a716abd88b4";
$scopes = "read_orders,write_products,write_reports,read_reports,read_customers,read_fulfillments,read_inventory,read_orders,read_products";
$redirect_uri = "https://localhost/shopify_report/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();