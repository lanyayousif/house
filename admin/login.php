<?php
require_once 'includes/nav.php';
require_once 'includes/login.php';
in(0);
?>
<div class="mt-5 mx-auto w-75">
    <div class="col-lg-4 col-sm mx-auto p-5 w-50 bg-warning rounded-4">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input name="username" value="<?php echo htmlspecialchars($_POST['username']??" "); ?>" type="text"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" value="<?php echo  htmlspecialchars($_POST['password']??" "); ?>" type="password"
                    class="form-control" id="exampleInputPassword1">
            </div>
            <p class="text-white text-center text-capitalize">
                <?php echo isset($_POST['submit'])?$errors['result']: " "; ?></p>
            <button name="submit" type=" submit" class="btn btn-success w-100">Submit</button>
        </form>
    </div>
</div>
<?php
require_once 'includes/footer.php';
?>