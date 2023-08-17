<html>
    <head>
        <title>Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="style.php" media="screen">

    </head>

    <body>
    <center><h1 div id = "def">Search for a book? </h1></div></center>
        <div id = "abc">
        
        <form method = "POST" action = "front2.php">
    
            Book Name:<br><br>
            <input type ="text" name="name"  size ="80"><br><br>

            <input type = "submit" value = "SUBMIT" />
        </form>
</div>
<div class = "trial">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $db_name = "project";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn ->connect_error)
    {
        die("Connection failed" .$conn->connect_error);

    }
    echo "";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name = $_POST['name'];
    $query = "SELECT * FROM `books` WHERE `BookName` LIKE '%$name%'";

    
    $result= mysqli_query($conn, $query);
    
    echo "<table border='1'>

    <center><tr>

    <th>BOOK ID</th>

    <th>BOOK NAME</th>

    <th>AVAILABILITY</th>

    </tr>";

    $resultcheck = mysqli_num_rows($result);

    if($resultcheck >  0)
    {
        while($row1 = mysqli_fetch_assoc($result))
        {
            
            echo "<tr>";
            echo "<td>" .$row1['BookId']."</td>";
            echo "<td>" .$row1['BookName']."</td>" ;
            echo "<td>" .$row1['Availability']."<td>";
            echo "</tr>";
            
        }

    }

    else{
        echo "0 records";
    }

    echo "</table>";
}
?>
</div>
</body>
</html>