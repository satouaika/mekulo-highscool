<?php
// 企業情報
$co = [
    'slug' => 'oparts',
    'company_name' => '株式会社 オーパーツ',
    'catch-copy' => 'アーチェリーの命中率も、ゲーム機の高性能も、この部品次第！',
    'industry' => '製造業',
    'post-code' => '〒386-0002',
    'adress' => '長野県上田市住吉1128-1',
    'homepage' => '',
    'logo_filename' => 'logo.png',
    'meta_keyword' => 'オーパーツ,高卒特集',//meta情報のキーワード
    'meta_desc' => 'オーパーツでは新卒を募集しています。',//meta情報のディスクリプション
];

// 募集職種
$occupation = [
    'job_general-manufacturing' => [
        'name' => '総合製造スタッフ',
        'url' => 'job_general-manufacturing',
        'catch-copy' => 'ものづくりのエキスパートを目指す',
        'work' => '総合製造スタッフ',
        'fv_url' => 'job_general-manufacturing/firstview.jpg',
        'meta_keyword' => 'オーパーツ,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => 'オーパーツでは新卒を募集しています。',//職種のmeta情報のディスクリプション

    ],
];

// 応募前見学
$visit = [
     [
        'about' => '応募前見学',//応募前見学、オープンファクトリーなど      
        'date' => '2025年8月4日（月） 13時00分～<br>2025年8月5日（火） 13時00分～<br>2025年8月6日（水） 13時00分～<br>2025年8月7日（木） 13時00分～<br>',//開催日時（表示形式）
        'date_num' => '2025-03-21',//開催日
        'deadline' => '2025-03-10',//募集締め切り日
        'content' => 'アーチェリーの照準器や高級オーディオ機器の部品、半導体製造装置のパーツなど、0.001mm（1000分の1ミリ）の精度が求められる超精密加工を行っている工場を見学できます。',
    ],
];

// 目次
$toc = [
    'top' => [
        'name' => '企業TOP',
        'icon' => 'company.png',
        'url' => '',
    ],
    'job' => [
        'name' => '募集職種',
        'icon' => 'carrier.png',
        'url' => '',
        'submenu' => $occupation,
		],
	];