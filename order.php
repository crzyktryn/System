<?php include('db_order.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Summary</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2 style="text-align:center;">Order Summary</h2>
    <form action="save_order.php" method="post">
      <label>Transaction ID</label>
      <input type="text" name="transaction_id" required>

      <label>Order Total</label>
      <input type="number" name="order_total" step="0.01" required>

      <label>Amount Paid</label>
      <input type="number" name="amount_paid" step="0.01" required>

      <label>Change</label>
      <input type="number" name="change" step="0.01" required>

      <label>Payment Method</label>
      <select name="payment_method" required>
        <option value="">Select</option>
        <option value="Cash">Cash</option>
        <option value="Card">Card</option>
        <option value="Online">Online</option>
      </select>

      <button type="submit" class="confirm-btn">Confirm Payment</button>
      <button type="reset" class="red-btn">Cancel</button>
    </form>
  </div>
</body>
</html>