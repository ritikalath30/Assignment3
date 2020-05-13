<?php
session_start();

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "Lath";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT DISTINCT countryname FROM list" ;
$result = $conn->query($sql);
?>
<html>
<head>
  <title>Place order</title>
  </head>
  <h1>Country Name</h1>
  <body>
    <form method="get" action="selectstate.php" autocomplete="on">
    <label for="countryname"> Select Country</label>
      <select class="form-control" required name="countryname">
        <?php while($row = $result->fetch_assoc()){ ?>
          <option value="<?php echo $row['countryname'];?>"><?php echo $row['countryname'];?></option>
            <?php } ?>
    </select>
    <button type="submit">Next</button>
  </form>
    <?php
    $conn->close();
    ?>

  </body>
  </html>
