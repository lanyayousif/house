<?php
include 'includes/nav.php';
in(2);
?>





<div class="col-lg-8 col-sm-12 m-1  bg-success rounded-3">
    <?php
if(isset($_POST['submit'])){
    $user->username=$_POST['username'];
    $user->password=hash('gost',$_POST['password']);
    $user->email=$_POST['email'];
    $user->rule=$_POST['rule'];
    if($user->create()=== true){
        redirect('adduser.php');
    }
    else{echo "<div class='m-4 text-center alert alert-danger h4'>".$user->create()."</div>" ; }
    
}

?>



    <form action="adduser.php" method="POST" enctype="multipart/form-data" class="m-4">
        <input type="text" name="username" placeholder="username" class="form-control mx-1 my-2">
        <input type="password" name="password" placeholder="password" class="form-control mx-1 my-2">
        <input type="text" name="email" palaceholder="email" class="mx-1 my-2 form-control">
        <select name="rule" class="form-control mx-1 my-2">
            <option value="1">User</option>
            <option value="2">Admin</option>
        </select>
        <button name="submit" class="mx-1 my-2 w-100 btn btn-warning">Create new Account</button>
    </form>




</div>

</div>














<?php
include 'includes/footer.php';
?>









<?php
// create
// $user->rule=0;
// $user->username="shatw";
// $user->password="1234";
// $user->email="shatw@gmail.comm";
// $user->create();
// update
//   $user_data=user::get_all_user_by_id(5);
//   echo $user_data->username;
//   $user_data->username="sozii";
//   $user_data->update();
// delete 1
// $id=$user->id=16;
// $user->delete();

// delete 2

// $user_data=user::get_all_user_by_id(16);
// $user_data->delete();

// $user->username="rzgar";
// $user->create();

// $user_data=user::get_all_user_by_id(17);
// $user_data->username="zhyar";
// $user_data->update();

// $k=$user->get_all();
// foreach($k as $l){
//     echo $l->username ."<br>";
// }

 ?>