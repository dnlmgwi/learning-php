<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="./packages/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <title>Sign Up</title>
</head>
<script>

</script>
<?php
include "./repositories/authRepository.php";

global $errPass;

// Usage example
$repository = new AuthRepository();

if (isset($_POST['submit'])) {
    //Sanitizing Inputs
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    // $confirmPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    // check if a password has been entered and if it is a valid password
    if (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0) {
        $errPass = '<p class="text-sm">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            $repository->SignUp($email, $username, $hashed_password);

            var_dump("Account Created");
        } catch (\Throwable $th) {
            error_log("Error during sign-up: " . $th->getMessage());

            var_dump("An error occurred while creating the account. Please try again later.");
        }
    }
}
?>

<body>
    <div class="d-flex vh-100 justify-content-center">
        <div class="row align-items-center">
            <!-- contents -->
            <!-- echo $_SERVER['PHP_SELF'] -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
            ; ?>" method="POST">
                <div class="d-flex flex-column align-items-center gap-4">
                    <div class=" d-flex flex-column align-items-center gap-4 mb-5 page-width">
                        <div class=" d-flex flex-column align-items-center container-fluid p-0">
                            <h3 class="fw-bold">Sign Up</h3>
                        </div>
                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="email" class="form-label fw-normal">Email</label>
                            <input type="email" class="form-control p-3 rounded border-secondary w-100" name="email"
                                id="email" placeholder="Email" autocomplete="email" required />
                        </div>

                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="username" class="form-label fw-normal">Username</label>
                            <input type="text" class="form-control p-3 rounded border-secondary w-100" name="username"
                                id="username" placeholder="Username" autocomplete="username" required />
                        </div>

                        <div class="d-flex flex-column align-items-start w-100">
                            <label for="password" class="form-label fw-normal">Password</label>
                            <input type="password" class="form-control p-3 rounded border-secondary w-100"
                                name="password" id="password" placeholder="Password" autocomplete="password" required />
                            <?php echo $errPass; ?>
                        </div>

                        <!-- <div class="d-flex flex-column align-items-start w-100">
                            <label for="confirm-password" class="form-label fw-normal"> Confirm Password</label>
                            <input type="password" class="form-control p-3 rounded border-secondary w-100"
                                name="new-password" id="new-password" placeholder="Confirm Password"
                                autocomplete="new-password" required />
                        </div> -->


                        <div>
                            <span class="fw-normal" style="font-size: 14px;">Already have an account? </span>
                            <a href="./"><span class="fw-semibold text-decoration-underline"
                                    style="font-size: 14px;">Sign In</span></a>
                        </div>
                    </div>
                    <div class="primary-button rounded light d-flex">
                        <button type="submit" value="submit" name="submit" class=" d-flex justify-content-center
                            align-items-center">
                            <span class="fw-normal">Sign Up</span>
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