<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="my-4 text-center">Directory Listing</h1>

        <?php
        $t = date("H");
        if ($t < "20") {
            echo "<h2 class='text-success text-center'>Have a good day</h2>";
        } else {
            echo "<h2 class='text-primary text-center'>Have a good night</h2>";
        }
        ?>

        <div class="row">
            <?php
            // Get the current directory
            $currentDir = __DIR__;

            // Open the directory
            if ($handle = opendir($currentDir)) {
                // Loop through the directory
                while (false !== ($entry = readdir($handle))) {
                    // Skip the current directory and parent directory listings
                    if ($entry != "." && $entry != "..") {
                        // Check if the entry is a directory
                        if (is_dir($entry)) {
                            // Count the number of files in the directory
                            $fileCount = count(glob("$entry/*"));
                            // Create a Bootstrap card for each directory
                            echo "
                        <div class='col-md-4'>
                            <div class='card mb-4 shadow-sm'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$entry</h5>
                                    <p class='card-text'>Contains $fileCount files</p>
                                    <a href='./$entry' class='btn btn-primary'>Open Directory</a>
                                </div>
                            </div>
                        </div>";
                        }
                    }
                }
                // Close the directory handle
                closedir($handle);
            } else {
                echo "<div class='alert alert-danger'>Unable to open directory.</div>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap 5 JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>