<?php
include('db_membership.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $contact = $_POST['contact_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $membership = $_POST['membership_no'];
    $reg_date = $_POST['registration_date'];

    $sql = "INSERT INTO members (first_name, last_name, contact_number, email, address, membership_no, registration_date) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $first, $last, $contact, $email, $address, $membership, $reg_date);

    if ($stmt->execute()) {
        echo "<script>alert('Member registered successfully.'); window.location.href='membership.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>