<?php
session_start();
$statename= $_GET['statename'];
$_SESSION["statename"]=$statename;
echo $statename;
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
$sql = "SELECT DISTINCT cityname FROM list WHERE statename ='$statename'";
$result = $conn->query($sql);
?>
<html>
<head>
  <title>Place order</title>
  </head>
  <h1>State Name</h1>
  <body>
    <form method="get" action="main.php" autocomplete="on">

    <label for="cityname">Select City</label>
      <select class="form-control" required name="cityname">
        <?php while($row = $result->fetch_assoc()){ ?>
          <option value="<?php echo $row['cityname'];?>"><?php echo $row['cityname'];?></option>
            <?php } ?>
    </select>
    <button type="submit" >Next</button>
  </form>
    <?php
    $conn->close();
    ?>

  </body>
  </html>
