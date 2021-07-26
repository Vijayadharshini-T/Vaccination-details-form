

<!DOCTYPE html>
<html lang="en">
<head>
  <title>vaccine table</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<b><h1><center>REGISTERED STUDENTS</center></h1></b>
<div class="container">
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
          
        <th>NAME</th>
        <th>REG NO</th>
        <th>DOB </th>
        <th>DEPARTMENT</th>
        <th>YEAR</th>
        <th>DOSE COMPLETED</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        
      <?php
$conn = mysqli_connect("localhost","id17276526_viji","Bb![M6FpKw]iM+\G","id17276526_login");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT uname2,regno,dob,dept,year,dose FROM vaccine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["uname2"]. "</td><td>" . $row["regno"] . "</td><td>"
.$row["dob"]."</td><td>".$row["dept"]."</td><td>" . $row["year"]."</td><td>" . $row["dose"];
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

     
    </tbody>
  </table>
  
  </div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
