<?php
include "../db.php";
 
$sql = "
SELECT b.*, c.full_name AS client_name, s.service_name
FROM bookings b
JOIN clients c ON b.client_id = c.client_id
JOIN services s ON b.service_id = s.service_id
ORDER BY b.booking_id DESC
";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html>
<head><meta charset="utf-8">

    <title>Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/pageStyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php include "../nav.php"; ?>
 
<h2>Bookings</h2>
<p><a href="bookings_create.php">+ Create Booking</a></p>
 
<table border="1" cellpadding="8">
  <tr>
    <th>ID</th><th>Client</th><th>Service</th><th>Date</th><th>Hours</th><th>Total</th><th>Status</th><th>Action</th>
  </tr>
  <?php while($b = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $b['booking_id']; ?></td>
      <td><?php echo $b['client_name']; ?></td>
      <td><?php echo $b['service_name']; ?></td>
      <td><?php echo $b['booking_date']; ?></td>
      <td><?php echo $b['hours']; ?></td>
      <td>₱<?php echo number_format($b['total_cost'],2); ?></td>
      <td><?php echo $b['status']; ?></td>
      <td>
        <a href="payment_process.php?booking_id=<?php echo $b['booking_id']; ?>">Process Payment</a>
      </td>
    </tr>
  <?php } ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>