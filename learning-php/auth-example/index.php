<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <link href="./packages/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign In</title>
</head>
<script>

</script>
<?php
include "./repositories/dbRepository.php";


// Usage example
$repository = new DbRepository();

if ($repository) {
    // Usage example
    $repository->initUserTable();
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
                            <input type="email" class="form-control p-3 rounded border-secondary w-100" name="email"
                                id="email" placeholder="Username or Email" autocomplete="email" required />
                        </div>


                        <div class="d-flex flex-column align-items-start w-100">
                            <div class="row d-flex align-items-start w-100 m-0">
                                <div class="col">
                                    <label for="password" class="form-label fw-normal">Password</label>
                                </div>
                                <div class="col-auto text-end">
                                    <a href="/forgotPassword.html">
                                        <p class="small">Forgot Password?</p>
                                    </a>
                                </div>
                            </div>

                            <input type="password" class="form-control p-3 rounded border-secondary w-100"
                                name="password" id="password" placeholder="Password" autocomplete="password" required />

                        </div>


                        <div>
                            <span class="fw-normal" style="font-size: 14px;">Don't have an account? </span>
                            <a href="./signup.php"><span class="fw-semibold text-decoration-underline"
                                    style="font-size: 14px;">Sign Up
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
    <script src="./packages/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>