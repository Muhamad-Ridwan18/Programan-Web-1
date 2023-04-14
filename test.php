<!DOCTYPE html>
<html>
<head>
  <title>Data Form</title>
</head>
<body>
  <h1>Data Form</h1>
  <?php
  
  if(empty($_GET['name']) || empty($_GET['age']) || empty($_GET['address']) || empty($_GET['sexs'])) {
    echo "<script>alert('Data harus diisi semua');</script>";
    exit;
  }
  $name = $_GET['name'];
  $age = $_GET['age'];
  $address = $_GET['address'];
  $sexs = $_GET['sexs'];
  
  // Gunakan nilai yang disimpan dalam variabel
  echo "<p>Name: " . $name . "</p>";
  echo "<p>Age: " . $age . "</p>";
  echo "<p>Address: " . $address . "</p>";
  echo "<p>Sexs: " . $sexs . "</p>";
  ?>
</body>
</html>


                