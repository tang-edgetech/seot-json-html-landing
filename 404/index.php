<?php
include_once '../inc/functions.php';
$page_title = "Page Not Found";
$page_slug = "404";
?>
<!DOCTYPE html>
<html lang="ms-MY" dir="ltr">
    <head>
        <title>404 - Page Not Found</title>
        <meta name="robots" content="noindex">
        <base href="<?php echo $site_base_url;?>">
        <?php include_once '../inc/stylesheet.php';?>
    </head>
    <body>
        <?php include_once '../inc/navbar.php'; ?>

        <main class="pt-0" id="">
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="text-editor text-center">
                                <h1>404 - Page Not Found</h1>
                                <p>Sorry, the page you're looking for doesn't exist.</p>
                                <a href="<?php echo $site_base_url;?>">Return to Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include_once '../inc/footer.php'; ?>
    </body>
</html>
