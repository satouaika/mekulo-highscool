<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$keywords = $co['meta_keyword'];
$description = $co['meta_desc']; 

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';

$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php //include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $highschool_base ?>highschool.css?v=2">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<?php if ($description) { ?>
<meta name="description" content="<?= $description ?>">
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?= $keywords ?>">
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
		"name": "高卒特集",
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
<section id="content" class="content">
	<p class="catchcopy"><span>ダクト作りを覗いてみよう！</span></p>
	<p class="cont">
		創風の応募前見学では、一枚の金属板が機械によってさまざまな形に切り取られていく様子や、ダクトの形に組み立てられていく工程を間近で見学できます。<br>
		ハンマーで叩くときの「カンカン」という音や、身体を使って金属板を曲げていく様子は創風ならでは。職場の雰囲気をチェックできるほか、先輩から直接仕事の話を聞けるかもしれません。<br>
		また、ダクト作り体験も行います。実際に手を動かしてみることで、仕事のイメージが具体的になるでしょう。
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年7月29日（火） 10時30分～、13時30分～</li>
			<li>2025年7月31日（木） 10時30分～、13時30分～</li>
			<li>2025年8月7日（木） 10時30分～、13時30分～</li>
			<li>2025年8月21日（木） 10時30分～、13時30分～</li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社説明<span>10分程度</span></li>
			<li>工場見学<span>20分程度</span></li>
			<li>仕事体験<span>30分程度</span></li>
		</ul>
	</div>
	<a href="../apply/#entry" class="entry-btn">
		<img src="../../../flag.png" class="flag">
		<span>応募前見学情報を見る</span>
		<img src="../../../arrow.svg">
	</a>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
