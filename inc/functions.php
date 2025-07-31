<?php
define('SITE_ROOT', dirname(__DIR__));
// define('SITE_ROOT', __DIR__);
$localhost = array('127,0,0,1', 'localhost', '::1');
if ( !in_array( $_SERVER['REMOTE_ADDR'], $localhost ) ) {
    $site_base_url = 'https://gee55.info';
}
else {
    $site_base_url = 'http://localhost/gee55.info';
}

function getColorConfig($key = null) {
    $configPath = SITE_ROOT . "/data/config.json";
    if (file_exists($configPath)) {
        $config = json_decode(file_get_contents($configPath), true);
        return $key ? ($config['colors'][$key] ?? null) : $config['colors'];
    }
    return [];
}

function loadPageContent($page) {
    $path = SITE_ROOT . "/data/{$page}.json";
    if (file_exists($path)) {
        return json_decode(file_get_contents($path), true);
    }
}

function convert_site_base_url($data) {
    global $site_base_url;
    return str_replace('{{site_base_url}}', $site_base_url, $data);
}

$version = '1.0.'.time();
$menu_items = [
    [
        "title" => "Permainan Slot",
        "url" => "permainan-slot",
        "target" => "_self",
    ],
    [
        "title" => "Muat Turun APK",
        "url" => "download-apk",
        "target" => "_self",
    ],
    [
        "title" => "VIP",
        "url" => "vip",
        "target" => "_self",
    ],
    [
        "title" => "Kaedah Pembayaran",
        "url" => "kaedah-pembayaran",
        "target" => "_self",
    ],
    [
        "title" => "Bonus & Promosi",
        "url" => "bonus-promotion",
        "target" => "_self",
    ],
    [
        "title" => "Hubungi Kami",
        "url" => "hubungi-kami",
        "target" => "_self",
    ],
];

$disclaimer_items = [
    [
        "title" => "Perjudian Bertanggungjawab",
        "url" => "perjudian-bertanggungjawab",
        "target" => "_self",
    ],
    [
        "title" => "Dasar Privasi",
        "url" => "dasar-privasi",
        "target" => "_self",
    ],
    [
        "title" => "Terma dan Syarat",
        "url" => "terma-dan-syarat",
        "target" => "_self",
    ],
];

$gameProviders = [
    "slot" => [
        "title" => "Web Slots",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/slot.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/uu_free.png?20250714171", 
                "title" => "uu_free" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/uu.png?20250714171", 
                "title" => "uu" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/playtech.png?20250714171", 
                "title" => "playtech" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/pgslot.png?20250714171", 
                "title" => "pgslot" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/easytogo_mega888h5.png?20250714171", 
                "title" => "easytogo_mega888h5" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/easytogo_918kissh5.png?20250714171", 
                "title" => "easytogo_918kissh5" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/awc_spadegaming.png?20250714171", 
                "title" => "awc_spadegaming" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/mgp.png?20250714171", 
                "title" => "mgp" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/awc_jdb.png?20250714171", 
                "title" => "awc_jdb" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/pragmaticplay.png?20250714171", 
                "title" => "pragmaticplay" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/habanero.png?20250714171", 
                "title" => "habanero" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/joker.png?20250714171", 
                "title" => "joker" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/nextspin.png?20250714171", 
                "title" => "nextspin" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/awc_jili.png?20250714171", 
                "title" => "awc_jili" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/cq9.png?20250714171", 
                "title" => "cq9" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/fachai.png?20250714171", 
                "title" => "fachai" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/jqk_lucky365.png?20250714171", 
                "title" => "jqk_lucky365" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/easytogo_ace333.png?20250714171", 
                "title" => "easytogo_ace333" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/gw99.png?20250714171", 
                "title" => "gw99" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/evo888h5.png?20250714171", 
                "title" => "evo888h5" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/pegasus.png?20250714171", 
                "title" => "pegasus" 
            ],
        ]
    ],
    "marble-run" => [
        "title" => "Marble Run",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/marble-run.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/marble-run/marbula2.png?20250714171", 
                "title" => "marbula2" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/marble-run/marbula2_free.png?20250714171", 
                "title" => "marbula2_free" 
            ],
        ]
    ],
    "game-711" => [
        "title" => "App Slots",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/game-711.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/mega888a.png?20250714171",
                "title" => "mega888a"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/s918kissa.png?20250714171",
                "title" => "s918kissa"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/pussy888a.png?20250714171",
                "title" => "pussy888a"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/jqk_lionking.png?20250714171",
                "title" => "jqk_lionking"
            ],
        ]
    ],
    "live-dealer" => [
        "title" => "Live Casino",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/live-dealer.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/evolution.png?20250714171",
                "title" => "evolution"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/pragmaticplay.png?20250714171",
                "title" => "pragmaticplay"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/playtech.png?20250714171",
                "title" => "playtech"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/awc_sexygaming.png?20250714171",
                "title" => "awc_sexygaming"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/dreamgame.png?20250714171",
                "title" => "dreamgame"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/mgp.png?20250714171",
                "title" => "mgp"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/pegasus.png?20250714171",
                "title" => "pegasus"
            ],
        ]
    ],
    "fishing" => [
        "title" => "Fishing",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/fishing.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/awc_jili.png?20250714171",
                "title" => "awc_jili"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/awc_spadegaming.png?20250714171",
                "title" => "awc_spadegaming"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/joker.png?20250714171",
                "title" => "joker"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/cq9.png?20250714171",
                "title" => "cq9"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/fachai.png?20250714171",
                "title" => "fachai"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/awc_jdb.png?20250714171",
                "title" => "awc_jdb"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/gw99.png?20250714171",
                "title" => "gw99"
            ],
        ]
    ],
    "sport" => [
        "title" => "Sportbook",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/sport.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/sport/ssport.png?20250714171",
                "title" => "ssport"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/sport/cmd.png?20250714171",
                "title" => "cmd"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/sport/m8sport.png?20250714171",
                "title" => "m8sport"
            ],
        ]
    ],
    "loteri" => [
        "title" => "Loteri",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/lottery.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/lottery/abs.png?20250714171", 
                "title" => "abs" 
            ],
        ]
    ],
    "p2p" => [
        "title" => "P2P",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/p2p.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/awc_kingmaker.png?20250714171",
                "title" => "awc_kingmaker"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/habanero.png?20250714171",
                "title" => "habanero"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/awc_jili.png?20250714171",
                "title" => "awc_jili"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/cq9.png?20250714171",
                "title" => "cq9"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/gw99.png?20250714171",
                "title" => "gw99"
            ],
        ]
    ],
    "cockfight" => [
        "title" => "Cockfight",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/cockfight.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/cockfight/awc_sv388.png?20250714171", 
                "title" => "awc_sv388" 
            ],
        ]
    ],
    "horseracing" => [
        "title" => "Horse Racing",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/horseracing.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/horseracing/awc_horsebook.png?20250714171", 
                "title" => "awc_horsebook" 
            ],
        ]
    ],
];
$top_brands = [
    "gee55" => [
        "title" => "GEE55",
        "description" => "Up to RM 55,555 Monthly Deposit Lucky Draw",
        "url" => "https://www.gee55.vip//",
    ],
    "jom99" => [
        "title" => "JOM99",
        "description" => "5% Harian Bonus Penyelamat",
        "url" => "https://www.jom99.net/",
    ],
    "winmy" => [
        "title" => "WINMY",
        "description" => "Welcome Bonus 60%",
        "url" => "https://winmy.asia/register/referer/a6e0ace56f",
    ],
    "win4u" => [
        "title" => "WIN4U",
        "description" => "120% First Deposit Bonus",
        "url" => "https://www.win4u.asia/m/register?affiliateCode=win4u0010",
    ],
    "winboleh" => [
        "title" => "Winboleh",
        "description" => "Welcome bonus RM888 140%",
        "url" => "http://mplanding2.winboleh1.com/",
    ],
    "kaya88" => [
        "title" => "KAYA88",
        "description" => "Welcome bonus 60%",
        "url" => "https://kayabet88.com/register/referer/86b284c3b1",
    ],
    "klwin" => [
        "title" => "KLWIN",
        "description" => "First deposit<br/>30 dpt 60<br/>100 dpt 200",
        "url" => "https://klwin111.com/register/referer/c6a6dd69be",
    ],
    "kaya96" => [
        "title" => "Kaya96",
        "description" => "20% weekend bonus",
        "url" => "https://kaya96.com/register/referer/08fadc27ba",
    ],
];
?>