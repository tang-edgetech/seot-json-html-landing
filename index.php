<?php
include_once 'inc/functions.php';
$page_name = "Home";
$page_slug = "home";
$pageData = loadPageContent($page_slug);
$meta_tags = $pageData['meta_tags'];
$meta_tags = convert_site_base_url($meta_tags);
$markup_schema = $pageData['schema'];
$content = $pageData['content'];
$faq = $pageData['faq'];
?>
<!DOCTYPE html><html lang="ms-MY" dir="ltr">
    <head>
        <?php echo $meta_tags;?>
        <base href="<?php echo $site_base_url;?>">
        <?php include_once 'inc/stylesheet.php';?>
        <?php if( $markup_schema ) {
            echo $markup_schema;
        } ?>
    </head>
    <body>
        <?php include 'inc/navbar.php';?>
        <main class="pt-0" id="">
            <?php include 'inc/marquee.php';?>
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-3">
                            <div class="top-brand">
                            <?php include 'inc/top-brand.php';?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-login py-0" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="d-flex flex-wrap p-3 userprofile-container w-100 mt-3" id="userProfileModule">
                                <div class="d-flex flex-wrap p-0 m-0 w-100 justify-content-between mb-3">
                                    <a class="btn-style text-uppercase btn-section-bg col-6 text-center" style="max-width: 48.5%;" type="button" alt="Register Button" href="#">Daftar</a>
                                    <a class="btn-style text-uppercase btn-primary col-6 text-center" style="max-width: 48.5%;" type="button" alt="Login Button" href="#">Log Masuk</a>
                                </div>
                                <div class="d-flex m-0 p-0 w-100">
                                    <div class="col-7 px-0 pe-2">
                                        <div class="text-0-75">Main Baki:</div>
                                        <div class="text-1-3 text-weight-700 text-primary">MYR&nbsp; <span class="setWallet-homepage d-inline-block" style="width: max-content">0.00</span></div>
                                        <div class="d-flex m-0 p-0 text-0-75">
                                            <div class="col-6 px-0">Depo Minimum</div>
                                            <div class="col px-0">:&nbsp;MYR&nbsp;30.00</div>
                                        </div>
                                        <div class="d-flex m-0 p-0 text-0-75">
                                            <div class="col-6 px-0">Pengeluaran Minimum</div>
                                            <div class="col px-0">:&nbsp;MYR&nbsp;50.00</div>
                                        </div>
                                    </div>
                                    <div class="col-5 px-0 ">
                                        <div class="row m-0 p-0 w-100">
                                            <a class="btn-style btn-primary w-100" type="button" alt="Deposit Button" href="https://kayabet888.com/my-wallet?tab=deposit">
                                                <div class="d-flex align-items-center">
                                                    <img class="col-3 px-0" src="<?php echo $site_base_url;?>/images/icon-deposit.png" alt="token" style="max-width: 11%">
                                                    <span class="col px-0 ps-2 text-0-9 text-weight-600">Deposit</span>
                                                </div>
                                            </a>
                                            <a class="btn-style btn-section-bg w-100 mt-2 " type="button" alt="withdraw Button" href="https://kayabet888.com/my-wallet?tab=withdraw">
                                                <div class="d-flex align-items-center">
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>/images/icon-withdrawal.png" alt="token" style="max-width: 11%">
                                                    <span class="col px-0 ps-2 text-0-9 text-weight-600">Withdraw</span>
                                                    <div class="sequence-line">
                                                        <span> </span>
                                                        <span> </span>
                                                        <span> </span>
                                                        <span> </span>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a class="btn-style btn-section-bg w-100 mt-2" type="button" alt="refresh Button" href="https://kayabet888.com/login">
                                                <div class="d-flex align-items-center">
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>/images/icon-refresh.png" alt="token" style="max-width: 11%">
                                                    <span class="col px-0 ps-2 text-0-9 text-weight-600">Segar Semula</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-0" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="row px-2 py-3 mx-0 userprofile-container w-100 mt-3 provider-list" style="gap:1%;">
                            <?php
                            if( $gameProviders ) {
                                $i = 0;
                                $total_count = count($gameProviders);
                                $middle = floor($total_count / 2);
                                foreach( $gameProviders as $key => $items ) {
                                    $slug = $key;
                                    $title = $items['title'];
                                    $icon = $items['icon'];
                                    $index = intval($i)+1;
                                    $class_active = ($i==0) ? ' active' : '';
                                    $class_active .= ' '.$slug;
                                    $check_active = 'check-active';
                                    if ($i < $middle) {
                                        $class_active .= ' row-first';
                                    }
                                    else {
                                        $class_active .= ' row-second mt-2';
                                        $check_active .= ' d-none';
                                    }
                                    echo '<div class="col btn-style btn-section-bg text-0-6 text-center px-0 text-capitalize'.$class_active.'" style="min-width: 19%; max-width: 19%;" data-target="'.$slug.'">
                                    <div class="mb-2 '.$check_active.'">
                                        <img src="'.$icon.'" alt="provider">
                                    </div>
                                    '.$title.'
                                </div>';

                                    $i++;
                                }
                            }
                            ?>
                            </div>

                            <div class="w-100 position-relative">
                                <div id="game_tab" class="row px-2 mx-0 w-100">
                                <?php $default_provider = 'slot';
                                if( $gameProviders[$default_provider] ) {
                                    foreach( $gameProviders[$default_provider]['games'] as $key => $game ) {
                                        $title = $game['title'];
                                        $thumbnail = $game['thumbnail'];
                                        echo '<div class="col-2 mt-2 px-2">
                                        <a href="javascript:void(0)">
                                            <img src="'.$thumbnail.'" alt="'.$title.'" class="w-100 rounded">
                                        </a>
                                    </div>';
                                    }
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                            
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="text-editor"><?php echo $content;?></div>
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
        <?php include 'inc/footer.php';?>
    </body>
</html>