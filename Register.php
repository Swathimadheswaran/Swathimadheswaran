<?php

$con = new mysqli("localhost" , "root"," " , "student");
if(!$con){
    die("not connect".mysqli_error());
}
else{
    if(isset($_POST['Submit']))
    {
       
        $emailid = mysqli_real_escape_string($con,$_POST['Email Id']);
        $name = mysqli_real_escape_string($con,$_POST['Name']);
        $rollnumber = mysqli_real_escape_string($con,$_POST['Roll Number']);
        $year = mysqli_real_escape_string($con,$_POST['Year']);
        $college = mysqli_real_escape_string($con,$_POST['College']);
        $department = mysqli_real_escape_string($con,$_POST['Department']);
        $phonenumber = mysqli_real_escape_string($con,$_POST['Phone Number']);
        $sql = "INSERT INTO detail('Email Id','Name' , 'Roll Number ', 'College' , 'Department',' Phone Number') Values('swathi@gmail.com','swathi','123',thirdyear','muthayammal college of engineering' , 'Electrical and Electronics
 Engineering','133454556')";
 $result = mysqli_query($con,$sql);
if(!$result) {
    echo "Not Registered.....(";
}
elsr{
    echo "Registered Successfully";
}
mysqli_close($con);
  }
}
?>