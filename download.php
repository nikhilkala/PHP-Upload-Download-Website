<html>
<head>
<title>
	File Download
</title>
<link href="css/main1.css" rel="stylesheet" type="text/css"/>
</head>
<body>
   <header>
            <h2>File Download</h2>
   </header>

<?php     	
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "uploads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="select filepath,filename from files";
$result=$conn->query($sql);
$i=1;
//echo "$result";
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	echo $i.") "  .'<a href="' . $row['filepath'] .        '" download> '.$row['filename'].'	 </a>';
        $i++;
        echo "<br>";
    }
} else 
{
    echo "No Files To Download";
}
$conn->close();
?>
</body>




</html>
