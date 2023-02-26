<?php include 'includes/nav.php'; in(1); ?>

<div class="col-lg-8 col-sm-12 m-1  bg-success rounded-3">
    <?php


if(isset($_POST['submit'])){
    $upload->userid=$session->userid;
    $upload->title=$_POST['title'];
    $upload->details=$_POST['details'];
    $upload->price=$_POST['price'];
    $upload->set_img($_FILES['file']);
    if($upload->save()=== true){
        redirect('owner_post.php');
    }
    else{echo "<div class='m-4 text-center alert alert-danger h4'>".$upload->save()."</div>" ; } 
}

?>

    <form action="upload_post.php" method="POST" enctype="multipart/form-data" class="m-4">
        <input type="text" name="title" placeholder="Title" class="form-control mx-1 my-2">
        <textarea placeholder="Details" name="details" class="mx-1 my-2 form-control"></textarea>
        <input type="text" name="price" palaceholder="price" class="mx-1 my-2 form-control">
        <input type="file" name="file" class="mx-1 my-2 form-control">
        <button name="submit" class="mx-1 my-2 w-100 btn btn-warning">Upload</button>
    </form>




</div>
</div>
<?php include 'includes/footer.php';?>