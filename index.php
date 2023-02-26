<?php include_once('./includes/nav.php'); ?>

<div class="p-2" style="background-image:url(./upload/house.jpg);background-size:cover">
    <div class="mt-3">
        <div class="jumbotron p-5  blur m-2 bg-warning text-center rounded-4">
            <span class="h3 radius-20 p-2 text-white ">welocome to real estate</span>
            <p class="lead mt-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi</p>
            <a href="login.php" class="btn blur text-white">watch the houses</a>
        </div>
    </div>
</div>


<h1 class="mt-5 text-success">New House</h1>
<div class="col-lg-12 col-sm-12  bg-success rounded-3 ">

    <div class="m-1 row  justify-content-center">
        <?php
      $allpost=upload::get_all(0);
      foreach ($allpost as $post) {?>
        <div class="m-2 p-0 card" style="width:18rem;">
            <img src="upload/<?php echo $post->fileName ; ?>" class="card-img-top" alt="..." height="200px">
            <div class=" card-body">
                <h5 class="card-title"><?php echo $post->title ; ?></h5>
                <p class="card-text"><?php echo $post->details ; ?></p>
                <span class="btn btn-success" style="position: absolute; right: 0;top: 45%;">
                    <?php echo $post->price; ?></span>
                <a href="#" class="btn btn-warning">View Home</a>
            </div>
        </div>

        <?php } ?>
    </div>
</div>

</div>

<?php include 'includes/footer.php';?>