<?php
// 企業情報
$co = [
    'slug' => 'naito-kogyousho',
    'company_name' => '交和物産 株式会社',
    'catch-copy' => '信州の味を、全国へ',
    'industry' => '食品製造業',
    'post-code' => '〒389-0603',
    'adress' => '長野県埴科郡坂城町大字南条5181-3',
    'homepage' => 'https://ajinokakehashi.com/',
    'logo_filename' => 'logo.png',
    'meta_keyword' => '交和物産,高卒特集',//meta情報のキーワード
    'meta_desc' => '交和物産では新卒を募集しています。',//meta情報のディスクリプション
];

// 募集職種
$occupation = [
    'job_food-manufacturing' => [
        'name' => '食品製造職',
        'url' => 'job_food-manufacturing',
        'catch-copy' => 'おいしい、安心、うれしいを作る',
        'work' => '食品製造職',
        'fv_url' => 'job_food-manufacturing/firstview.jpg',
        'meta_keyword' => '交和物産,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => '交和物産では新卒を募集しています。',//職種のmeta情報のディスクリプション
    ],
];

// 応募前見学
$visit = [
     [
        'about' => '応募前見学',//応募前見学、オープンファクトリーなど      
        'date' => '2025年7月29日（火） 10時00分～<br>2025年7月31日（木） 10時00分～<br>2025年8月6日（水） 10時00分～<br>2025年8月8日（金） 10時00分～<br>',//開催日時（表示形式）
        'date_num' => '2025-07-29',//開催日
        'deadline' => '2025-07-28',//募集締め切り日
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明します。<br>30分～60分予定。<br>別日でも対応できます。お気軽にご連絡ください。',
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