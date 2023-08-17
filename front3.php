<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css3.css">
        <link rel="stylesheet" href="style2.php" media="screen">


    </head>

    <body>
    <center><h1 id ="title">Check Book Possesions?</h1></center>
        <div id = "one">
        <form method= "POST" action = "front3.php">
    
        
    
        Enter Membership ID:<br><br>
        <input type="int" name="MId" ><br><br>
        
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
    $MId = $_POST['MId'];
    $query = "SELECT `MId`,`MName`, `BookId`, `BookName`, `IssueDate`, `DueDate`, `ReturnDate`, `Fine`  FROM `issues` i NATURAL JOIN `members` m NATURAL JOIN `books` b WHERE `MId` LIKE '%$MId%'";

    
    $result= mysqli_query($conn, $query);

    echo "<table border='2'>

    <tr>
    <th>MId</th>
    <th>MName</th>

    <th>BookId</th>

    <th>BookName</th>
    <th>IssueDate</th>
    <th>DueDate</th>
    
    <th>ReturnDate</th>
    <th>Fine</th>

    </tr>";

    $resultcheck = mysqli_num_rows($result);

    if($resultcheck >  0)
    {
        while($row1 = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td width= 10%>" .$row1['MId']."</td>";
            echo "<td width= 10%>" .$row1['MName']."</td>";
            echo "<td  width= 10%>" .$row1['BookId']."</td>";
            echo "<td  width= 10%>" .$row1['BookName']."</td>" ;
            echo "<td  width= 10%>" .$row1['IssueDate']."</td>";
            echo "<td  width= 10%>" .$row1['DueDate']."</td>";
            

           
            echo "<td  width= 10%>" .$row1['ReturnDate']."</td>";
            echo "<td  width= 10%>" .$row1['Fine']."</td>";
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