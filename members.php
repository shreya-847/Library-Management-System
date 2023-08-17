<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connection.php'

    //$Mname = &_POST['Mname'];
    //$Contact = &_POST['Contact'];

    $sql= insert into `members`(Mname,Contact) values(`$Mname`,`Contact`);
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo "Data inserted successfully";

    }
    else{
        die(mysqli_error($con));
    }
}?>
