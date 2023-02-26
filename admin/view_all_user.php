<?php include 'includes/nav.php';in(2);?>


<?php

if(isset($_GET['post_id'])){
    $userid=$database->secure($_GET['post_id']);
    $get_user=user::get_all_by_id("`id`='$id'");
   $deleted= $user->delete("`id`='$userid' ");
   if($deleted=== true){
    redirect("view_all_user.php");
    }else{
        redirect("view_all_user.php?NotFound");
    }
}
?>

<div class="col-lg-8 col-sm-12 m-1  bg-success rounded-3">



    <div class="m-1 row  justify-content-center">
        <?php
      $allpost=user::get_all(0);
      foreach ($allpost as $post) {?>
        <div class="m-2 p-0 card" style="width:18rem;">
            <img src="assets/img/user.png" class="card-img-top" alt="..." style="width:10rem; margin:20px auto"
                height="150px">
            <div class=" card-body">
                <h5 class="card-title"><?php echo $post->username ; ?></h5>
                <p class="card-text"><?php echo $post->email ; ?></p>
                <p class="card-text"><?php
                 if($post->rule ==1){
                    echo "user";}
                    else{
                        echo "admin";
                    }
                         
                ?></p>
                <a href="?post_id=<?php echo $post->id; ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>

        <?php } ?>
    </div>
</div>

</div>

<?php include 'includes/footer.php';?>