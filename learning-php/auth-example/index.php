<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />

    <title>Sign In</title>
</head>
<script>

</script>
<?php
include "./repositories/authRepository.php";


// Usage example
$repository = new AuthRepository();

if ($repository) {
    // Usage example
    $repository->createUser();

    var_dump("Connected successfully");
} else {
    var_dump("Connected failed");
}
?>

<body>
    <div class="d-flex vh-100 justify-content-center">
        <div class="row align-items-center">
            <!-- contents -->
            <form>
                <div class="d-flex flex-column align-items-center gap-4">
                    <div class=" d-flex flex-column align-items-center gap-4 mb-5 page-width">
                        <div class=" d-flex flex-column align-items-center container-fluid p-0">
                            <h3 class="fw-bold">Sign In</h3>
                        </div>
                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="" class="form-label fw-normal">Username or Email</label>
                            <input type="email" class="form-control p-3 rounded border-secondary w-100" name="" id="" placeholder="Username or Email" />
                        </div>


                        <div class="d-flex flex-column align-items-start w-100">
                            <div class="row d-flex align-items-start w-100 m-0">
                                <div class="col">
                                    <label for="" class="form-label fw-normal">Password</label>
                                </div>
                                <div class="col-auto text-end">
                                    <a href="/forgotPassword.html">
                                        <p class="small">Forgot Password?</p>
                                    </a>
                                </div>
                            </div>

                            <input type="password" class="form-control p-3 rounded border-secondary w-100" name="" id="" placeholder="Password" />

                        </div>


                        <div>
                            <span class="fw-normal" style="font-size: 14px;">Don't have an account? </span>
                            <a href="./signup.php"><span class="fw-semibold text-decoration-underline" style="font-size: 14px;">Sign Up
                        </div>
                        <div class="primary-button rounded light d-flex">
                            <button class="d-flex justify-content-center align-items-center">
                                <span class="fw-normal">Sign In</span>
                            </button>
                        </div>
                    </div>
            </form>


        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>