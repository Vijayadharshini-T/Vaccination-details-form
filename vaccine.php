<?php 

?><script>
    setTimeout(function(){  history.back(); }, 5000);
</script>

<?php
 $uname2 = $_POST['uname2'];
 $regno = $_POST['regno'];
 $dob = $_POST['dob'];
 $dept = $_POST['dept'];
 $year = $_POST['year'];
 $dose = $_POST['dose'];
 
 if (!empty($uname2) && !empty($regno) && !empty($dob) && !empty($dept) && !empty($year) && !empty($dose)) {
     
    $host = "localhost";
    $dbUsername = "id17276526_viji";
    $dbPassword = "Bb![M6FpKw]iM+\G";
    $dbname = "id17276526_login";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT into vaccine(uname2,regno,dob,dept,year,dose)values('$uname2','$regno','$dob','$dept','$year','$dose')";
     //Prepare statement
     $sql = mysqli_query($conn, $INSERT);
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } 
    else {
//   echo "Error: " . $sql . "<br>" . $query . "<br>" .$conn->error;
    echo "New record   created successfully";

    }
    mysqli_close($conn);
    }
}
 else {
 echo "All field are required";
 die();
}
?>