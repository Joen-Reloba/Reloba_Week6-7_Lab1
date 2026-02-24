<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM clients ORDER BY client_id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/pageStyle.css">
    <link rel="stylesheet" href="../style.css">


    <title>Clients</title>
</head>
<body>
<?php include "../nav.php"; ?>
 
<h2>Clients</h2>
<p><a href="client_add.php">+ Add Client</a></p>
 
<table border="1" cellpadding="8">
  <tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['client_id']; ?></td>
      <td><?php echo $row['full_name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td>
        <a href="client_edit.php?id=<?php echo $row['client_id']; ?>">Edit</a>
      </td>
    </tr>
  <?php } ?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>