<?php
// 企業情報
$co = [
    'slug' => 'naito-kogyousho',
    'company_name' => '有限会社ファインフォーミング',
    'catch-copy' => '全国唯一！鋳造×鍛造で世界に通じるアルミ部品を生み出す',
    'industry' => '製造業',
    'post-code' => '〒386-2203',
    'adress' => '長野県上田市真田町傍陽938',
    'homepage' => 'https://fine-f.co.jp/',
    'logo_filename' => 'logo.png',
    'meta_keyword' => 'ファインフォーミング,高卒特集',//meta情報のキーワード
    'meta_desc' => 'ファインフォーミングでは新卒を募集しています。',//meta情報のディスクリプション
];

// 募集職種
$occupation = [
    'job_cyuzo' => [
        'name' => '鋳造職人',
        'url' => 'job_cyuzo',
        'catch-copy' => '熱く燃えろ！鋳造の世界で職人デビュー！',
        'work' => '鋳造職',
        'fv_url' => 'job_cyuzo/firstview.jpg',
        'meta_keyword' => 'ファインフォーミング,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => 'ファインフォーミングでは新卒を募集しています。',//職種のmeta情報のディスクリプション

    ],
    'job_tanzo' => [
        'name' => '鍛造職人',
        'url' => 'job_tanzo',
        'catch-copy' => '実は奥が深い、迫力ある鍛造の世界',
        'work' => '鍛造職',
        'fv_url' => 'job_tanzo/firstview.jpg',
        'meta_keyword' => 'ファインフォーミング,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => 'ファインフォーミングでは新卒を募集しています。',//職種のmeta情報のディスクリプション
    ],
];

// 応募前見学
$visit = [
     [
        'about' => '応募前見学',//応募前見学、オープンファクトリーなど      
        'date' => '2025年7月30日（月） 10時30分～<br>2025年8月6日（水） 10時30分～',//開催日時（表示形式）
        'date_num' => '2025-03-21',//開催日
        'deadline' => '2025-03-10',//募集締め切り日
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
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