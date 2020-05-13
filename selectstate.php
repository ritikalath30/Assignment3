<?php
session_start();
$countryname= $_GET['countryname'];
$_SESSION["countryname"]=$countryname;
echo $countryname;
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
$sql = "SELECT DISTINCT statename FROM list WHERE countryname ='$countryname'";
$result = $conn->query($sql);
?>
<html>
<head>
  <title>Place order</title>
  </head>
  <h1>State Name</h1>
  <body>
    <form method="get" action="cityname.php" autocomplete="on">

    <label for="statename"> Select State</label>
      <select class="form-control" required name="statename">
        <?php while($row = $result->fetch_assoc()){ ?>
          <option value="<?php echo $row['statename'];?>"><?php echo $row['statename'];?></option>
            <?php } ?>
    </select>
    <button type="submit" >Next</button>
  </form>
    <?php
    $conn->close();
    ?>

  </body>
  </html>
