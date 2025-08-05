<?php
$page_name = "Bonus & Promosi";
$page_slug = 'bonus-promosi';
include_once '../inc/functions.php';
$pageData = loadPageContent($page_slug);
$meta_tags = $pageData['meta_tags'];
$meta_tags = convert_site_base_url($meta_tags);
$markup_schema = $pageData['schema'];
$content = $pageData['content'];
$faq = $pageData['faq'];
?>
<!DOCTYPE html>
<html lang="ms-MY" dir="ltr">
    <head>
        <?php echo $meta_tags;?>
        <base href="<?php echo $site_base_url;?>">
        <?php include_once '../inc/stylesheet.php';?>
        <?php if( $markup_schema ) {
            echo $markup_schema;
        } ?>
    </head>
    <body>
        <?php include '../inc/navbar.php';?>
        <main class="pt-0" id="">
            <?php include '../inc/marquee.php';?>
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-3">
                            <div class="top-brand">
                            <?php include '../inc/top-brand.php';?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="text-editor"><?php echo convert_site_base_url($content);?></div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php if( $faq ) { ?>
            <section class="" id="faq">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <h2>Soalan Lazim (FAQ)</h2>
                            <div class="accordion" id="accordionFAQ">
                            <?php $i = 1;
                            foreach ( $faq as $item ) {
                                $title = $item['heading'];
                                $body = $item['body'];
                                if( $title && $body ) {
                                    $heading_class = 'accordion-button';
                                    $heading_expanded = 'true';
                                    $body_class = 'accordion-collapse collapse show';
                                    if( $i > 1 ) {
                                        $heading_class = 'accordion-button collapsed';
                                        $heading_expanded = 'false';
                                        $body_class = 'accordion-collapse collapse';
                                    }
                                    $index = str_pad($i, 2, "0", STR_PAD_LEFT);
                                    $body = convert_site_base_url($body);
                                    echo '<div class="accordion-item"><h3 class="accordion-header"><button class="'.$heading_class.'" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$index.'" aria-expanded="'.$heading_expanded.'" aria-controls="collapse'.$index.'">'.$title.'</button></h3><div id="collapse'.$index.'" class="'.$body_class.'" data-bs-parent="#accordionFAQ"><div class="accordion-body">'.$body.'</div></div></div>';
                                    $i++;
                                }
                            } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>
        </main>
        <?php include '../inc/footer.php';?>
    </body>
</html>