<?php
require('vendor/autoload.php');

// Set your Razorpay API keys
$api_key = 'YOUR_RAZORPAY_KEY_ID';
$api_secret = 'YOUR_RAZORPAY_KEY_SECRET';

// Create Razorpay API client
$api = new Razorpay\Api\Api($api_key, $api_secret);

try {
    // Create order data
    $orderData = [
        //'receipt'         => 3456,
        'amount'          => amount,  // 50000 paise = 500 INR
        'currency'        => 'INR',
        'payment_capture' => 1       // 1 for automatic capture, 0 for manual capture
    ];

    // Create order
    $razorpayOrder = $api->order->create($orderData);

    // Get the order_id
    $order_id = $razorpayOrder['id'];
    echo "Order ID: " . $order_id;

} catch(Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
