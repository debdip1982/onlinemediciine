<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Medicine Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color: red;
       color: white;
       text-align: center;
    }
    </style>



</head>
<body>

<div class="container">
    <div class="row">

        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span class="sr-only"> Toggle Naviagation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        

                    <button>
                        <a href="#" class="navbar-brand"> Online Medicine</a>

                        




            </div>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">page1</a></li>
                    <li><a href="#">page2</a></li>
                    <li><a href="#">page3</a></li>
                    <li><a href="#">page4</a></li>
                </ul>




            </div>
        </nav>


    </div>
</div>


<div class="container">
<div class="row">

    <div class="col-md-3">

        <img src="1.jpg" height=250px width=280px>
    </img>


    </div>
<div class="col-md-3">

<img src="2.jpg" height=250px width=280px>
    </img>
        
    </div>

    <div class="col-md-3">

        <img src="3.jpg" height=250px width=280px>
    </img>
        
    </div>

    <div class="col-md-3">

        <img src="4.jpg" height=250px width=280px>
    </img>
        
    </div>

</div>
 
 
     <div class="row">
    

    
    <h1>Registration Form</h1>
     

     
    <form name="registration" type="POST" action="index.php">
        <div class="col-md-3">
            
            
            <div class="col-md-9">name<input type=text name="name1">
            Gender<input type="radio" name="gender" value="Male">Male
                  <input type="radio" name="gender"  value="Female">Female
            Email Address<input type="text" name="email">
            Password<input type="password" name="pwd">
            <input type="submit" name="submit">
            <input type="reset">
 

            </div>
    </form>

    </div>



</div>

 



<div class="footer">
    <p>MINI Project Work Done By MCA 2022 passout Batch NSEC</p>
  </div>



</div>

</div>














</div>




</body>
 
  </html>

<?php

  

$name1=$_POST['name1'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$passwd=$_POST['pwd'];
$host="localhost";
$dbusername="root";
$dbpass='';
$dbname="onlinemedicine";
echo $name1;
echo $gender;
echo $email;
echo $passwd;
 
$conn=mysqli_connect($host,$dbusername,$dbpass,$dbname);
if(!$conn)
{
    die(mysqli_error());
}
$sql="insert into registration(name,gender,email,password)values('$name1','$gender','$email','$passwd')";
mysqli_query($conn,$sql);
echo "data submitted";
 
mysqli_close($conn);

 
?>

 
</html>
