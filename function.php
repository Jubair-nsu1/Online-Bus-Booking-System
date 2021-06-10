<?php

$conn =mysqli_connect("localhost", "root","","bts");


if (isset($_POST['login_submit'])) {
  session_start();
  if (isset($_SESSION["email"])) {
      session_destroy();
  }

  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $query = "select * From info Where email='$email' And pass='$pass'";
  $result =mysqli_query($conn,$query);

  $count = mysqli_num_rows($result);

  if($count==1){
    while ($row = mysqli_fetch_array($result)) {
          $name = $row['name'];
          $email = $row['email'];
    }
    $_SESSION["name"]     = $name;
    $_SESSION["email"] = $email;
    header("location:menu.php");
  }
  else{
    echo "<script>alert('Error login')</script>";
    echo "<script>window.open('login.php','_self')</script>";
  }


}




if (isset($_POST['booking_submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $departure_date = $_POST['departure_date'];
  $bus_name = $_POST['bus_name'];
  $destination = $_POST['destination'];
  $departure_time = $_POST['departure_time'];

  $query = "Insert Into booking(name, phone, departure_date, bus_name, destination, departure_time) Values('$name','$phone','$departure_date','$bus_name','$destination','$departure_time')";
  $result =mysqli_query($conn,$query);

 if($result){
  echo "<script>alert('Booked Successfully')</script>";
  echo "<script>window.open('menu.php','_self')</script>";
  }
}






if (isset($_POST['register_submit'])) {
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $pass = $_POST['pass'];

  $query = "Insert Into info(name, address, phone, email, city, pass) Values('$name','$address','$phone','$email','$city','$pass')";
  $result =mysqli_query($conn,$query);

 if($result){
  echo "<script>alert('Registered Successfully')</script>";
  echo "<script>window.open('home.php','_self')</script>";
  }
}




function get_details(){
global $conn;
$query = "Select * From booking";
$result =mysqli_query($conn,$query);

$c=1;
while($row=mysqli_fetch_array($result)){
  $name = $row['name'];
  $phone = $row['phone'];
  $departure_date = $row['departure_date'];
  $bus_name = $row['bus_name'];
  $destination = $row['destination'];
  $departure_time = $row['departure_time'];

  echo '<tr>
   <td style="color:red">'.$c.'</td>
   <td style="color:orange">'.$name.'</td>
   <td>'.$phone.'</td>
   <td style="color:green">'.$departure_date.'</td>
   <td>'.$bus_name.'</td>
   <td>'.$destination.'</td>
   <td style="color:green">'.$departure_time.'</td>
   </tr>';

   $c++;
}

}



?>
