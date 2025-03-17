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