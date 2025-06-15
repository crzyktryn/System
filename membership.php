<?php include('db_membership.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Membership Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2 style="text-align:center;">Membership Registration</h2>
    <form action="save.php" method="post">
      <label>First Name</label>
      <input type="text" name="first_name" required>

      <label>Last Name</label>
      <input type="text" name="last_name" required>

      <label>Contact Number</label>
      <input type="text" name="contact_number" required>

      <label>Email Address</label>
      <input type="email" name="email" required>

      <label>Address</label>
      <textarea name="address" rows="3" required></textarea>

      <label>Membership No.</label>
      <input type="text" name="membership_no" required>

      <label>Registration Date</label>
      <input type="date" name="registration_date" required>

      <button type="submit" class="save-btn">Save</button>
      <button type="reset" class="cancel-btn">Cancel</button>
    </form>
  </div>
</body>
</html>