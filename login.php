<?php

session_start();

if(isset($_SESSION['email']))
{
    header('location: ./index.php');
}


?>
<?php include './layouts/header.php' ?>

<div class="container" style="margin-top: 10em;">


    <form action="./controllers/loginController.php" method="POST">
        <div class="row">
            <div class="col">
                <input name="email" type="text" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
            </div>

        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


</div>

<?php include './layouts/footer.php' ?>