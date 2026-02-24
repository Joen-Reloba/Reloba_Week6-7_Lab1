<?php
include "../db.php";
 
$id = $_GET['id'];
 
$get = mysqli_query($conn, "SELECT * FROM clients WHERE client_id = $id");
$client = mysqli_fetch_assoc($get);
 
$message = "";
 
if (isset($_POST['update'])) {
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
 
  if ($full_name == "" || $email == "") {
    $message = "Name and Email are required!";
  } else {
    $sql = "UPDATE clients
            SET full_name='$full_name', email='$email', phone='$phone', address='$address'
            WHERE client_id=$id";
    mysqli_query($conn, $sql);
    header("Location: client_list.php");
    exit;
  }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Edit Client</title></head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/pageStyle.css">
    <link rel="stylesheet" href="../style.css">
<body>
<?php include "../nav.php"; ?>
 
<h2>Edit Client</h2>
<p style="color:red;"><?php echo $message; ?></p>
 
<form method="post">
  <label>Full Name*</label><br>
  <input type="text" name="full_name" value="<?php echo $client['full_name']; ?>"><br><br>
 
  <label>Email*</label><br>
  <input type="text" name="email" value="<?php echo $client['email']; ?>"><br><br>
 
  <label>Phone</label><br>
  <input type="text" name="phone" value="<?php echo $client['phone']; ?>"><br><br>
 
  <label>Address</label><br>
  <input type="text" name="address" value="<?php echo $client['address']; ?>"><br><br>
 
  <button type="submit" name="update">Update</button>
</form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>