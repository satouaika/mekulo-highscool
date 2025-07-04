<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = '株式会社ミヤマ製作所の応募前見学ページです。';//メタディスクリプションをここに挿入
$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';
$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $highschool_base ?>highschool.css?v=2">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<?php if ($description) { ?>
<meta name="description" content="<?= $description ?>">
<?php } ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title_with_site ?>">
<?php if ($description) { ?>
<meta property="og:description" content="<?= $description ?>">
<?php } ?>
<meta property="og:url" content="<?= $canonical_url ?>">
<meta property="og:image" content="<?= $og_image ?>">
<meta property="fb:app_id" content="534360210586966">
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
		"@type": "ListItem",
		"position": 1,
		"name": "めくろうワークス",
		"item": "https://works.mekulo.jp/"
	},{
		"@type": "ListItem",
		"position": 2,
		"name": "高卒求人特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	}]
}
</script>

</head>
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_wr">
	<img alt="" class="fv_image" src="../firstview.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="visit1" class="content">
	<p class="catchcopy"><span>リアルな“ものづくり”を見学しよう！</span></p>
	<p class="cont">
		ミヤマ製作所の応募前見学では、実際に金属を削ったり、穴をあけたりしている作業の様子を、すぐそばで見学することができます。<br>
		使っている機械の音、熱、スピード――そのすべてが、ものづくりのリアルです。<br>
		「この部品、何に使われるんだろう？」<br>
		「この工程、どうやってやるの？」<br>
		そんな疑問が浮かんだら、遠慮せずにどんどん聞いてください！<br>
		作業現場の空気を体感することで、入社後のイメージもぐっと具体的になるでしょう。
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li><span class="br">2025年8月4日（月） 9時00分～</span></li>
			<li><span class="br">2025年8月5日（火） 9時00分～</span></li>
			<li><span class="br">2025年8月6日（水） 9時00分～</span></li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社説明<span>15分</span></li>
			<li>工場見学<span>30分</span></li>
		</ul>
	</div>
	<p class="entry_txt">応募前見学をご希望の方は、担任の先生や、進路指導の先生にご相談ください。</p>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
