<!DOCTYPE html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css2.css">
    
        <script type="text/javascript">
            
            function func1()
            {
            var fullname = document.getElementById("fn").value;
            var telphone = document.getElementById("abc").value;
                
                if(fullname != "") 
                { 
                    if(telphone == "")
                        alert("Enter something in textbox");
                                  
                }
       
             };
            </script>
    
    
    </head>
    
    <body>
        
         <center><h1 id = "div2"> WELCOME TO RIT LIBRARY!</h1></center>
        
        <div id = "mainpage">
        <form name="form" method="POST" >
        <h1>Create new account?</h1>		
            Full name:<br>
            <input id="fn" type="text" name="MName" size ="80" autofocus><br><br>
    
            Phone number:<br>
            <input id="abc" type="tel" name="Contact" placeholder="8888888888" pattern="[0-9]{10}" maxlength="10"  title="Ten digits code">    
                    <label style="font-size:9px;"> Eg : 0812222224  </label> <br><br>
    
            <input type = "submit" value = "SUBMIT" onclick="func1()"/>
            <input type = "reset" value = "RESET"/> 
        </form>

        <a href="http://localhost/newww/front2.php"><h1> Search for a Book?</h1></a>
         
        <a href="http://localhost/newww/front3.php"><h1> Check for Book Possesions?</h1></a>

            </div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connection.php';

   
    $MName = ($_POST['MName']);
    $Contact = ($_POST['Contact']);

    $sql= "INSERT INTO members(MName,Contact) VALUES ('$MName','$Contact')";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo "";

    }
    else{
        die(mysqli_error($conn));
    }
}?>
    </body>
</html>
        