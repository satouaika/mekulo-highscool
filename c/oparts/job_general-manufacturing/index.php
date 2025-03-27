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
    <img alt="" class="fv_image" src="../job-gm.jpg">
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
				ものづくりの全工程を担うクリエイティブ職
			</h3>
			<p>
				「総合製造職」は、ただ作業者として勤務する仕事ではありません。<br>
				アーチェリーやオーディオアンプ部品などの製造において、部品作りのすべてのプロセスを経験し、技術力と創造力を身につけて、最終的には全ての工程を自らの手でこなせる「ものづくりのエキスパート」を目指す職種です。
			</p>
			<div class="images">
				<img src="contents_1.jpg" alt="" class="scene">
				<img src="contents_2.jpg" alt="" class="scene">
			</div>
			<p>
				「手に職を付けたい」「将来的には独立してみたい」「いろんなことに挑戦してみたい」そんなエネルギーあふれる高校生を募集しています。
			</p>
			<h3>
				まずは現場で部品製造に携わり、基礎を学ぶ
			</h3>
			<p>
				入社して最初の2～3年間は、部品製造に携わりながら、加工の仕組みや図面の見方、機械の操作方法、道具の使い方を学びます。<br>
				機械にも、穴を開けたり、削ったりなどの加工用途ごとに様々な種類があります。それぞれを実際に使いながら、現場で技術を習得していきます。
			</p>
			<div class="images">
				<img src="contents_3.jpg" alt="" class="scene">
				<img src="contents_4.jpg" alt="" class="scene">
			</div>
			<h3>
				プログラムを組んで、加工機械を操る</h3>
			<p>
				最新の加工機械は、すべてプログラムで操作されます。<br>
				プログラムを組むには、まず原点（スタート位置）を設定した後、図面に記載された寸法を基に、どの方向にどれだけ動かすかを「座標」で決めます。<br>
				例えば、机の上で部品を作るとしたら、机の角を原点として、そこから横に何ミリ、縦に何ミリ動かすかを設定します。<br>
				そして切削や穴あけといった加工動作にも「G〇〇」といった指示コードがありますので、これらを使ってプログラムを組み、機械に指示を出します。<br>
				最初は、すでに組まれたプログラムを見ながら、コードを少し変えてみて、どう動きが変わるのかを試しながら学んでいきます。
			</p>
			<div class="images">
				<img src="contents_6.jpg" alt="" class="scene">
			</div>
			<h3>
				治具の設計や見積もりの作成</h3>
			<p>
				プログラムを組めるようになった次は「治具設計」に挑戦します。<br>
				治具は加工品を固定し、効率良く、またより精度高く部品を加工するための補助工具です。これらに関しては、この下にある「ものづくりの裏側大公開」で具体的な事例を紹介していますので、そちらをご確認ください。治具設計ができるようになると、加工順序や時間を計算しながら、部品製作の見積もりを作成することができるようになります。
			</p>
			<div class="images">
				<img src="contents_7.jpg" alt="" class="scene">
			</div>
			<h3>
				実際のものづくり事例：アーチェリーの矢を支える「アローレスト」の製作裏側
			</h3>
			<p>
				アーチェリーメーカー様から、「アローレスト」を作りたいとご依頼を受けました。アローレストとは、矢を安定させるための土台となるパーツのことです。
			</p>
			<div class="images">
				<img src="../slideshow_01.jpg" alt="" class="scene">
			</div>
			<p>
				まずは試しに1～2個の部品を試作してみましたが、実際に使ってみると期待通りの性能を発揮せず、使い物になりませんでした。<br>
				そこからメーカーの設計担当者様と試行錯誤を重ね、改良を繰り返し、３回目の試作でようやく実用化に至るパーツが完成しました。
			</p>
			<div class="images">
				<img src="../slideshow_04.jpg" alt="" class="scene">
			</div>
			<p>
				結果的には、厚さ2mm、横幅2cm程度の小さな部品となりました。大量生産を考えると、一個ずつを加工する方法では、手間も時間もかかるため、効率よく生産する方法を考える必要がありました。<br>
				そこで、長めの金属板（原材料）を用意し、4個分の部品を一度に製作できる専用治具を考案。そのおかげで、1個1個の材料を加工機械に取り付け、加工していたことが、4個同時に加工できるようになり、生産効率が大幅に向上しました。<br>
				現在では月に数千個単位で製造し、安定的にアローレスト部品を製造することができています。
			</p>
			<h3>
				実際のものづくり事例：アーチェリーの照準器を調整する「エレベーション」の製作裏側
			</h3>
			<p>
				照準器の高さを上下に調整するための「エレベーション」と呼ばれる部品製作のご相談をいただきました。ダイヤルを回すことで、照準の高さを自在に調整できる、非常に精密な部品の一つです。<br>
				この部品は、スムーズにスライドができるように、左右の面の平行度を0.005mm以内に抑える必要がありました。もし平行度が少しでもズレてしまうと、スライドがうまく動かなくなってしまいます。
			</p>
			<div class="images">
				<img src="case_3.jpg" alt="" class="scene">
			</div>
			<p>
				写真の通り、エレベーションは４つの面を加工する必要があります。<br>
				左右の面を削る際、片面の加工が終わった部品を機械から部品を取り外し、向きを変えて反対面を加工すると、どうしても平行度を0.005mm以内に保つのが難しくなります。<br>
				そこで、部品を取り外さず一度に４面を加工できる方法を考案し、平行度を保ったまま加工することに成功しました。<br>
				総合製造職に求められるのは、こうした精度を実現するために、加工方法や手順をゼロから考え抜き、時には専用の工具を設計して現場で使えるようにすることです。単なる作業ではなく、どんな困難にも挑戦し、自分の手で解決策を見つけていく力が求められます。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
					<li>
						<img src="gallery1.jpg" alt="">
					</li>
        			<li>
						<img src="gallery2.jpg" alt="">
					</li>
        			<li>
						<img src="gallery3.jpg" alt="">
					</li>
					<li>
						<img src="gallery4.jpg" alt="">
					</li>
					<li>
						<img src="gallery5.jpg" alt="">
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
				<img src="fujiwara.jpg" alt="">
				<hgroup>
					<h3>藤原朋子</h3>
					<p>
						ハローワークで偶然見つけたオーパーツの求人。家から近く、すぐに面接が決まり、入社しました。<br>
						現在は検査と出荷準備を担当しています。大手企業のように決められた作業を繰り返すのではなく、納期を守りながら自分のペースで進められる点が魅力です。<br>
						また、社長との距離が近く、働き方についても相談しやすい環境が整っています。実際に、勤務時間を調整していただいたり、学級閉鎖の際には子供を職場に連れてきて仕事をしたりしたこともあり、柔軟に働ける職場です。
					</p>
				</hgroup>
			</div>
			<p>2015年中途入社<br>藤原朋子</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="asakawa.jpg" alt="">
				<hgroup>
					<h3>浅川智也</h3>
					<p>
						千曲高校（夜間）卒業後、オーパーツに入社し、創業期から働いています。<br>
						現在は加工オペレーターとして、機械加工や仕上げ、バリ取りを担当。細かな傷を見逃さないための注意力が求められる繊細な作業ですが、製品の仕上がりにこだわることで、大きなやりがいを感じています。
					</p>
				</hgroup>
			</div>
			<p>2012年新卒入社<br>浅川智也</p>
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
							<dd>総合製造スタッフ</dd>
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
							<dd>5名</dd>
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
								
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>

							</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd></dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd></dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd></dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd></dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒386-0002<br>
								長野県上田市住吉1128-1
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>
								
							</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>

							</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均10時間</dd>
						</div>
						<div>
							<dt>就業場所における受動喫煙防止の取組</dt>
							<dd></dd>
						</div>
					</dl>
					<h3>募集・採用に関する情報</h3>
					<dl>
						<div>
							<dt>前年度の採用実績</dt>
							<dd></dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd></dd>
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
							<dd>10時間</dd>
						</div>
						<div>
							<dt>前年度の有給休暇の平均取得日数</dt>
							<dd>10日</dd>
						</div>
						<div>
							<dt>前年度の育児休業取得者数</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>役員/管理職の女性比率</dt>
							<dd></dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>11.3年</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3>キャリア形成支援制度</h3>
					<dl>
						<div>
							<dt>研修制度</dt>
							<dd>OJTのみ</dd>
						</div>
						<div>
							<dt>自己啓発支援制度</dt>
							<dd>
				<p>
					〇社内定期勉強会<br>
					当社メンバーが主体となり、定期的な社内勉強会を実施しています。長期に渡るものや、単発のものまで様々ですが、メンバー自らが勉強会の企画から考え、実行しています。<br>
					最近では、ウェブデザイン勉強会や、アクセス解析勉強会、マーケティング勉強会などを行いました。<br>
				</p>
				<p>
					〇資格取得支援<br>
					ウェブアナリスト、ウェブデザイン技能検定、ITパスポート、基本情報、ウェブ解析士などの資格取得にかかる費用を全て、会社承認の上で、100%補助を行っています。<br>
					また、資格取得に向けた社内勉強会も、随時開催しています。<br>
				</p>
				<p>
					〇当社主催の有料セミナーへの無料参加<br>
					当社では、「上田IT講座」というITセミナー事業を運営しています。行う講座内容は、HTML、CSSの内容から、データベース、プログラミング、Androidアプリ開発など、多岐に渡る講座を提供しています。<br>
					本来は、有料で参加できる講座ですが、当社メンバーは特別に無料で参加することができます。この機会に、新たな知識を付け、仕事に役立てている仲間も多くいます。<br>
				</p>
				<p>
					〇教材及び外部セミナー補助制度<br>
					ウェブ技術やデザインに関する教材本の購入にかかる費用を100%補助しています。また、外部セミナーへの受講費用は、勉強したことを社内で発表し、全メンバーに共有することを条件に50%補助しています。<br>
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
