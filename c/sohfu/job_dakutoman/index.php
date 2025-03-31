<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch-copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
$meta_keywords = $occupation[$last_segment]['meta_keyword'] ?? '';
$meta_desc = $occupation[$last_segment]['meta_desc'] ?? '';


// 現在のURLに一致しない職種を探す
$next_job = null; // 初期値
foreach ($occupation as $key => $job) {
    if ($key !== $last_segment) {
        $next_job = $job; // 最初に見つかった異なる職種をセット
        break; // ループを終了
    }
}


//========================================
// ページのメタデータ
$title = $name . ' - ' . $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = $meta_keywords;
$description = $meta_desc;

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/' . $last_segment . '/';

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
		"name": "新卒求人特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="../job-fv.jpg">
    <hgroup>
        <h1 class="catch"><?= $catch_copy ?></h1>
        <p class="fv-tag"><?= $name ?></p>
    </hgroup>
    <?php if (count($occupation) >= 2): // 配列数が2以上か確認し、無い場合は非表示にする ?>
        <a href="<?= $company_base . $next_job['url'] ?>/" class="btn">次の職種を見る</a>
    <?php endif; ?>
</div>
		<section class="page-nav">
			<a href="#job_detail">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-1.png">
					<p>仕事内容</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
			<a href="#employee_introduction">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-2.png">
					<p>社員紹介</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
			<a href="#recruitment_requirements">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-3.png">
					<p>募集要項</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
		</section>
		<section class="g" id="job_detail">
			<h2>仕事内容</h2>
			<h3>
				ダクト設置のプロ
			</h3>
			<p>
				ダクト職人は、県内に約200人しかいない珍しい仕事です。<br>
				一枚の金属板を筒の形に組み立てて、それを現場で繋げていく。簡単そうに聞こえますが、現場ごとにダクトの形も設置方法も違い、同じ作業はひとつもありません。<br>
				設計図を見ながらチームで考えて、試行錯誤しながら形にしていく。「知らない」「わからない」ことにワクワクできる人なら、きっとこの仕事を楽しめるはずです。
			</p>
			<div class="images">
				<img src="../first.jpg" alt="" class="scene">
			</div>
			<h3>
				職人の技
			</h3>
			<p>
				ダクト職人は、「腰道具」と呼ばれるさまざまな工具を身につけて作業します。ナラシハンマーやラチェットレンチと呼ばれる工具を使いながら、チームで声を掛け合い、素早くダクトを設置していきます。
			</p>
			<div class="images">
				<img src="" alt="" class="scene">
			</div>
			<p>
				取り付けの技術は1on1の個別指導ではなく、周りのみんなで教え合います。昔は「見て覚えろ」と言われることもありましたが、今はしっかり教える環境が整っています。<br>
				3年もすれば仕事の流れがわかり、5年ほどで一人前の職人に。小規模の現場なら、リーダーを任されることもあります。
			</p>
			<div class="images">
				<img src="job3.jpg" alt="" class="scene">
			</div>
			<p>
				また、ダクト職人にはさらなるスキルアップの道もあります。国家資格の取得には10年の実務経験が必要ですが、現場の監督業務の仕事を行うことも可能です。<br>
				「職人として活躍する」「監督としてマネジメントを学ぶ」など、自分の目標に合わせて成長できます。技術を磨き、自分だけのキャリアを築いていきましょう。
			</p>
			<h3>
				まずはダクト作りから
			</h3>
			<p>
				入社後は、まず工場内で安全面を学び、作業に必要な道具の使い方を覚えることから始めます。
			</p>
			<div class="images">
				<img src="../fifth.jpg" alt="" class="scene">
			</div>
			<p>
				ダクト職人の仕事は、取り付けだけではありません。工場で金属板を加工し、ダクトを組み立てる工程も大切な仕事のひとつです。最初は工場で作業を行いながら、ダクトがどのように作られているのかをしっかり学びます。
			</p>
			<div class="images">
				<img src="../firstview.jpg" alt="" class="scene">
			</div>
			<p>
				基礎を身につけたら、実際の現場へ。先輩と一緒に作業をしながら、取り付けの技術を学び、経験を積んでいきます。しっかりとしたサポート体制のもとで、一歩ずつ職人としての力を身につけていきましょう。
			</p>
			<div class="images">
				<img src="job6.jpg" alt="" class="scene">
			</div>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
					<li>
						<img src="photo1.jpg" alt="">
					</li>
        			<li>
						<img src="photo2.jpg" alt="">
					</li>
        			<li>
						<img src="photo3.jpg" alt="">
					</li>
					<li>
						<img src="photo6.jpg" alt="">
					</li>
				</ul>
				<div class="button left_btn">&lt;</div>
				<div class="button right_btn">&gt;</div>
				</div>
			</div>
		</section>
		<section class="g" id="employee_introduction">
			<h2>社員紹介</h2>
			<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="../fifth.jpg" alt="">
				<hgroup>
					<h3>工藤さん</h3>
					<p>
						高校は工業科ではなかったので、入社後はすべてが初めての経験でした。今では大きい現場を任せられるようになって、成長を実感しています。<br>
						社員同士の仲が良く、社員旅行も楽しみのひとつです。前回は2泊3日で北海道を満喫しました。
					</p>
				</hgroup>
			</div>
			<p>2013年新卒入社<br>工藤さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="../fifth.jpg" alt="">
				<hgroup>
					<h3>佐野さん</h3>
					<p>
						今は工場でダクトを作っています。入社4か月で、基本的なダクトは一通り作り方を覚えました。初めて自分で完成させられたときは、「私にもできるんだ！」とすごく嬉しかったです。今後は、より品質を高めていきたいです。<br>
						社長も社員のみなさんも、気さくで話しかけやすいです。
					</p>
				</hgroup>
			</div>
			<p>2024年中途入社<br>佐野さん</p>
		</li>
	</ul>
		</section>
		<section class="g requirements" id="recruitment_requirements">
			<h2>募集要項</h2>
			<div class="tabs">
				<button class="tab1">募集要項</button>
				<button class="ta2">キャリア形成</button>
			</div>
			<div class="requirement">
				<div class="content recruitment">
					<h3>募集要項</h3>
					<dl>
						<div>
							<dt>募集職種</dt>
							<dd>現場作業員</dd>
						</div>
						<div>
							<dt>雇用形態</dt>
							<dd>正社員</dd>
						</div>
						<div>
							<dt>学歴上の応募資格</dt>
							<dd>高卒以上、全学部全学科</dd>
						</div>
						<div>
							<dt>応募資格</dt>
							<dd>不問</dd>
						</div>
						<div>
							<dt>募集人員</dt>
							<dd>後日いただく</dd>
						</div>
						<div>
							<dt>選考方法</dt>
							<dd>書類選考、面接</dd>
						</div>
					</dl>
					<h3>採用後の待遇</h3>
					<dl>
						<div>
							<dt>基本給</dt>
							<dd>
								後日いただく
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>
								通勤手当（上限30,000円）
							</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>あり</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>年2回（3.5か月分）</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>3か月（期間中は日給制）</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>あり（60歳）</dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒386-2201<br>
								長野県上田市真田町長2411-12
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>
								8:30～17:30
							</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>
								90分
							</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>後日いただく（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均7時間</dd>
						</div>
						<div>
							<dt>就業場所における受動喫煙防止の取組</dt>
							<dd>なし</dd>
						</div>
					</dl>
					<h3>募集・採用に関する情報</h3>
					<dl>
						<div>
							<dt>前年度の採用実績</dt>
							<dd>2名</dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd></dd>
						</div>
					</dl>
					<h3>雇用管理状況（令和６年度実績）</h3>
					<dl>
						<div>
							<dt>前年度の月平均所定外労働時間の実績</dt>
							<dd>7時間</dd>
						</div>
						<div>
							<dt>前年度の有給休暇の平均取得日数</dt>
							<dd>19.5日</dd>
						</div>
						<div>
							<dt>前年度の育児休業取得者数</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>役員/管理職の女性比率</dt>
							<dd>役員40%、管理職0%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>17年</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3>キャリア形成支援制度</h3>
					<dl>
						<div>
							<dt>研修制度</dt>
							<dd>
								<p>
									〇雇入時教育<br>
									詳しく記載します。
								</p>
								<p>
									〇特別教育<br>
									詳しく記載します。
								</p>
								<p>
									〇技能講習<br>
									詳しく記載します。玉掛け、高所作業車、など
								</p>
							</dd>
						</div>
						<div>
							<dt>自己啓発支援制度</dt>
							<dd>
				<p>
					〇資格取得支援<br>
					業務に必要な資格の取得費用について、全額補助いたします。
				</p>
			</dd>
		</div>
		<div>
			<dt>メンター制度</dt>
			<dd>
				〇役員面談<br>
				3ヵ月に一度の役員面談があります。役員面談では、3ヵ月間仕事を通じて、自らが成長した所を振り返ったり、今の仕事で悩んでいることがあれば遠慮なく言って頂く場として活用しています。<br>
				そして、このような場で教えて頂いた課題は、「個人の課題」ではなく、「会社の課題」として私たち経営層も捉え、もっと良い会社を創るために組織として課題解決に臨んでいきます。<br>
				また、正社員の場合、一年に一度ですがこの場で昇給の話もしていきます。<br>
			</dd>
						</div>
					</dl>
				</div>
				<a href="<?= $company_base ?>apply/#entry" class="btn_entry">
					<img src="<?= $highschool_base ?>flag.png" class="flag">
					<span>応募前見学情報を見る</span>
					<img src="<?= $highschool_base ?>arrow.svg">
				</a>
			</div>
		</section>
		<section class="g nextpage">
    <h2>その他の職種を見てみる</h2>
    <ul class="image_navi">
        <?php foreach ($occupation as $key => $prop): ?>
            <?php if ($key !== $last_segment): // 現在のURLと異なる職種のみ表示 ?>
                <li>
                    <a href="<?= $company_base . $prop['url'] ?>">
                        <figure>
                            <img src="<?= $company_base . $prop['fv_url'] ?>" alt="">
                            <figcaption><?= $prop['name'] ?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</section>			
			</ul>
		</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
