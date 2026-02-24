<?php
include "db.php";

$clients = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS c FROM clients"))['c'];  

$services = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS c FROM services"))['c'];

$bookings = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS c FROM bookings"))['c'];

$revRow = mysqli_fetch_assoc(mysqli_query($conn, "SELECT IFNULL(SUM(amount_paid), 0) AS s FROM payments"));

$revenue = $revRow['s'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dashbaord</title>
</head>
<body>

    <?php
    include "nav.php";
    ?>
   <!-- <h1 class="fw-bold text-black">Dashboard</h1> -->

<div class="infos mt-5 d-flex justify-content-center gap-4 flex-wrap">
  <h1 class="fw-bold text-black">Dashboard</h1>
  
  <div class="card text-center" style="width: 12rem;">
    <div class="card-body">
      <h5 class="card-title">Total Clients</h5>
      <p class="card-text"><?php echo $clients; ?></p>
    </div>
  </div>
  
  <div class="card text-center" style="width: 12rem;">
    <div class="card-body">
      <h5 class="card-title">Total Services</h5>
      <p class="card-text"><?php echo $services; ?></p>
    </div>
  </div>
  
  <div class="card text-center" style="width: 12rem;">
    <div class="card-body">
      <h5 class="card-title">Total Bookings</h5>
      <p class="card-text"><?php echo $bookings; ?></p>
    </div>
  </div>
  
  <div class="card text-center" style="width: 12rem;">
    <div class="card-body">
      <h5 class="card-title">Total Revenue</h5>
      <p class="card-text"><?php echo number_format($revenue, 2); ?></p>
    </div>
  </div>

</div>

<div class="actions mt-5 d-flex justify-content-center gap-4 flex-wrap">
    <button id="clientBtn" class="btn btn-primary text-center">Add New Client</button>
    <button id="bookBtn" class="btn btn-primary">Create Bookings</button>
</div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>
</html>


