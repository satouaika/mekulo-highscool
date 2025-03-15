<?php
// 企業情報
$co = [
    'slug' => 'naito-kogyousho',
    'company_name' => '株式会社 創風',
    'catch-copy' => '一枚の金属板から、快適な空間を作る',
    'industry' => '管工事業',
    'post-code' => '〒386-2201',
    'adress' => '長野県上田市真田町長2411-12',
    'homepage' => 'https://sohfu.co.jp/',
    'logo_filename' => '',
    'meta_keyword' => '創風,高卒特集',//meta情報のキーワード
    'meta_desc' => '創風では新卒を募集しています。',//meta情報のディスクリプション
];

// 募集職種
$occupation = [
    'job_install' => [
        'name' => '現場作業員',
        'url' => 'job_install',
        'catch-copy' => '県内にわずか３００人！？ダクト職人になりませんか',
        'work' => '現場作業員',
        'fv_url' => 'job_instal/firstview.jpg',
        'meta_keyword' => '内藤工業所,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => '内藤工業所では新卒を募集しています。',//職種のmeta情報のディスクリプション

    ],
];

// 応募前見学あとでいれる
$visit = [
     [
        'about' => '応募前見学',//応募前見学、オープンファクトリーなど      
        'date' => '2025年3月21日（金） 9時00分～',//開催日時（表示形式）
        'date_num' => '2025-03-21',//開催日
        'deadline' => '2025-03-10',//募集締め切り日
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
    ],
    [
        'about' => 'オープンファクトリー',
        'date' => '2025年3月22日（土） 13時00分～',
        'date_num' => '2025-03-22',//数字入力？？
        'deadline' => '2025-03-15',//募集締め切り日
        'content' => '応募前見学として参加する方は参加申し込みをしてください。',
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