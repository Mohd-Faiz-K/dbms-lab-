<!DOCTYPE html>
   <html>
      <body>
           <h1>TEST</h1>
       <form action=""method="POST">  
           <div>   
             <div>
             <label>ID: </label>   
             <input type="number" placeholder="Enter ID" name="ID" required>
             </div>
             <div>
             <label>NAME : </label>   
             <input type="text" placeholder="Enter name" name="name" required>  
             </div>
             <div>
             <center><button type="submit">Submit</button></center>   
             </div>
          </div>   
       </form>     
      </body>
   </html>
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "labuser";
$password = "123";
$db="faiz";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id = $_POST["ID"];
$name = $_POST["name"];

$sql = "INSERT INTO test (ID, NAME)
VALUES ($id, '$name')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

