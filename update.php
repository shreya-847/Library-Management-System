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

   

    
    $query = mysqli_query($conn, "SELECT * FROM books");

    echo "<table border='1'>

    <tr>

    <th>BookId</th>

    <th>BookName</th>

    <th>Availability</th>

    </tr>";

    $resultcheck = mysqli_num_rows($query);

    if($resultcheck >  0)
    {
        while($row1 = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>" .$row1['BookName']."</td>";
            echo "<td>" .$row1['BookId']."</td>" ;
            echo "<td>" .$row1['Availability']."<td>";
            echo "</tr>";
        }

    }

    echo "</table>";
?>