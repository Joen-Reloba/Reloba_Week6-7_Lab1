<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM services ORDER BY service_id DESC");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/pageStyle.css">
        <link rel="stylesheet" href="../style.css">
    <title>Services</title>
</head>
<body>
<?php include "../nav.php"; ?>
 
<h2>Services</h2>
 
<table border="1" cellpadding="8">
  <tr>
    <th>ID</th><th>Name</th><th>Rate</th><th>Active</th><th>Action</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['service_id']; ?></td>
      <td><?php echo $row['service_name']; ?></td>
      <td>₱<?php echo number_format($row['hourly_rate'],2); ?></td>
      <td><?php echo $row['is_active'] ? "Yes" : "No"; ?></td>
      <td><a href="services_edit.php?id=<?php echo $row['service_id']; ?>">Edit</a></td>
    </tr>
  <?php } ?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>