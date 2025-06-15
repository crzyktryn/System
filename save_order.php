<?php
include('db_order.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $transaction_id = $_POST['transaction_id'];
    $order_total = $_POST['order_total'];
    $amount_paid = $_POST['amount_paid'];
    $change = $_POST['change'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO orders (transaction_id, order_total, amount_paid, change_amount, payment_method) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sddds", $transaction_id, $order_total, $amount_paid, $change, $payment_method);

    if ($stmt->execute()) {
        echo "<script>alert('Payment confirmed successfully.'); window.location.href='order.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>