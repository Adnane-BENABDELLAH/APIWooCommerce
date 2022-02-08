<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress',
    'ck_e8744cdd52370bd4db36f9cbf0da7a3e53c02e3f',
    'cs_34ee3dde943fc7dfcb14cb105a7fd49e1fb105a3',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>

<?php echo json_encode($woocommerce->get('orders')); ?>