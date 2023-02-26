<?php include 'includes/nav.php';in(2);?>


<?php

if(isset($_GET['post_id'])){
    $post_id=$database->secure($_GET['post_id']);
    $get_photo=upload::get_all_by_id("`post_id`='$post_id'");
    unlink("../upload/$get_photo->fileName");
   $deleted= $upload->delete("`post_id`='$post_id' ");
   if($deleted=== true){
    redirect("owner_post.php");
    }else{
        redirect("owner_post.php?NotFound");
    }
}
?>

<div class="col-lg-8 col-sm-12 m-1  bg-success rounded-3">



    <div class="m-1 row  justify-content-center">
        <?php
      $allpost=upload::get_all(0);
      foreach ($allpost as $post) {?>
        <div class="m-2 p-0 card" style="width:18rem;">
            <img src="../upload/<?php echo $post->fileName ; ?>" class="card-img-top" alt="..." height="200px">
            <div class=" card-body">
                <h5 class="card-title"><?php echo $post->title ; ?></h5>
                <p class="card-text"><?php echo $post->details ; ?></p>
                <span class="btn btn-success" style="position: absolute; right: 0;top: 45%;">
                    <?php echo $post->price; ?></span>
                <a href="#" class="btn btn-warning">View Home</a>
                <a href="?post_id=<?php echo $post->post_id; ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>

        <?php } ?>
    </div>
</div>

</div>

<?php include 'includes/footer.php';?>