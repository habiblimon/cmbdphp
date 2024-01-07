<?php 

    function clean($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    if(isset($_POST['sub123']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        $name   = clean($_POST['name']);
        $email  = clean($_POST['email']);

        if(empty($name)){
            $errName = "Please enter your name";

        }elseif(!preg_match("/^[A-Za-z. ]*$/", $name)){
            $errName = "Please enter a valid name"; 
        }else{
            $crrName = $name;
        }

        if(empty($email)){
            $errEmail = "Please enter your email";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errEmail = "Please enter a valid email";
        }else{
            $crrEmail = $email;
        }




    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation topic </title>


    <!-- Bosstrap 5.3.1 CSS  cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="<KEY>" crossorigin="anonymous">
   


</head>
<body>
    
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-6 m-auto border rounded shadow p-4">
                <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="mb-3 form-floating ">
                        <input type="text" placeholder="Your Name " name="name" class="form-control <?= isset($errName)? 'is-invalid':null; ?> <?= isset($crrName)? 'is-valid': null; ?>" value="<?= $name??null;   ?>">
                        <label for="">Your Name</label>
                        <div class="invalid-feedback">
                            <?= $errName ?? null; ?>
                        </div>
                        <div class="valid-feedback">
                            <?= $crrName ?? null; ?>
                        </div>
                    </div>


                    <div class="mb-3 form-floating ">
                        <input type="text" placeholder="Your Email " name="email" class="form-control <?= isset($errEmail)? 'is-invalid':null; ?> <?= isset($crrEmail)? 'is-valid': null; ?>" value="<?= $email??null;   ?>">
                        <label for="">Your Email</label>
                        <div class="invalid-feedback">
                            <?= $errEmail ?? null; ?>
                        </div>
                        <div class="valid-feedback">
                            <?= $crrEmail ?? null; ?>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-dark btn-lg" name="sub123">
                </form>
            </div>
        </div>
    </div>






<!--Bootstrap 5.3.1 JS cdn link  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>
</html>