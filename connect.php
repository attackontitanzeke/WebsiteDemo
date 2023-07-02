<html>

<head>
    <title>Insert Page</title>
</head>

<body>
 <?php



$conn = new mysqli("localhost", "root", "", "webdata");

$first_name = $_REQUEST['fname'];
$last_name = $_REQUEST['lname'];
$gender = $_REQUEST['gender'];
$address = $_REQUEST['ass'];
$email = $_REQUEST['email'];
$pincode = $_REQUEST['pincode'];
$card = $_REQUEST['card'];
$cardNo = $_REQUEST['cardNo'];
$expDate = $_REQUEST['expDate'];
$cvv = $_REQUEST['cvv'];

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration VALUES ('$first_name',
        '$last_name', '$gender', '$address', '$email', '$pincode', '$card', '$cardNo', '$expDate', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "New record added successfully";
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
  
</body>
</html>
