# website_for_Traveller
create website using PHP,HTML,BOOTSTRAP and Database SQL

connect database using

<?php 
    $con =mysqli_connect('localhost','root');
    if($con)
    {
        echo "connection succesful";
    }
    else
    {
        echo "no connection";
    }
    mysqli_select_db($con ,'userdata');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "insert into userinfo (user,email,mobile,comment) values('$user','$email','$mobile','$comment')";


    mysqli_query($con, $query);
    header('location:index.php');
?>
