<?php
include 'includes/nav.php';
in(1);
?>




<?php

// $alluser=user::get_all_user();

// while($row=mysqli_fetch_assoc($alluser))
// {
//     echo $row['username']." 34 <br>";
// }


// $user=user::get_all_user_by_id(2);
// $row2=mysqli_fetch_assoc($user);
// echo $row2['username']."  id<br>";
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// $get_all_user=user::get_all_user();
// $data=user::instant($get_all_user);

// foreach ($get_all_user as $user) {
// echo "<br> username  :  ". $user->username;
// echo "<br> password  :  ". $user->password;
// }

// $get_all_user_by_id=user::get_all_user_by_id(1);
// $data=user::instant($get_all_user_by_id);
// echo "<br>". $get_all_user_by_id->username;

// echo "<br> test ". $data->id." ";
// echo "<br> ". $data->username;
// echo "<br> ". $data->password;
// echo "<br> ". $data->email;
// **************************************************************************


?>




<?php


if(!$session->get_logged_in()){
    header("location:login.php");
}

include 'includes/footer.php';

?>