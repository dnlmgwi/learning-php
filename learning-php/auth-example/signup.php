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

    <title>Sign Up</title>
</head>
<script>

</script>
<?php
include "./config/database.php";


// Usage example
$db = new Database();
$conn = $db->getConnection();

if ($conn) {
    // Usage example
    $db = new Database();
    $conn = $db->getConnection();

    if ($conn) {
        var_dump("Connected successfully");
    } else {
        var_dump("Connected failed");
    }
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
                            <h3 class="fw-bold">Sign Up</h3>
                        </div>
                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="" class="form-label fw-normal">Username or Email</label>
                            <input type="email" class="form-control p-3 rounded border-secondary w-100" name="" id="" placeholder="Email" />
                        </div>
                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="" class="form-label fw-normal">Username</label>
                            <input type="name" class="form-control p-3 rounded border-secondary w-100" name="" id="" placeholder="Username" />
                        </div>
                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="" class="form-label fw-normal">Password</label>
                            <input type="password" class="form-control p-3 rounded border-secondary w-100" name="" id="" placeholder="Password" />

                        </div>
                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="" class="form-label fw-normal"> Confirm Password</label>
                            <input type="password" class="form-control p-3 rounded border-secondary w-100" name="" id="" placeholder="Confirm Password" />

                        </div>


                        <div>
                            <span class="fw-normal" style="font-size: 14px;">Already have an account? </span>
                            <a href="./"><span class="fw-semibold text-decoration-underline" style="font-size: 14px;">Sign In</span></a>
                        </div>
                    </div>
                    <div class="primary-button rounded light d-flex">
                        <button class="d-flex justify-content-center align-items-center">
                            <span class="fw-normal">Sign Up</span>
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