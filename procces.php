<!DOCTYPE html>
<html>
<head>
  <title>Data Form</title>
</head>
<body>
  <h1>Data Form</h1>
  <form method="get" action="process.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" required>
    <br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" value="<?php echo isset($_GET['age']) ? $_GET['age'] : ''; ?>" required>
    <br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo isset($_GET['address']) ? $_GET['address'] : ''; ?>" required>
    <br>
    <label for="sexs">Sexs:</label>
    <select id="sexs" name="sexs" required>
      <option value="" <?php echo empty($_GET['sexs']) ? 'selected' : ''; ?>>-- Select --</option>
      <option value="Male" <?php echo isset($_GET['sexs']) && $_GET['sexs'] == 'Male' ? 'selected' : ''; ?>>Male</option>
      <option value="Female" <?php echo isset($_GET['sexs']) && $_GET['sexs'] == 'Female' ? 'selected' : ''; ?>>Female</option>
    </select>
    <br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
