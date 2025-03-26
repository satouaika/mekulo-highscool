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
    <img alt="" class="fv_image" src="firstview.jpg">
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
				熱した金属を叩いて強くする、ダイナミックなものづくり
			</h3>
			<p>
				鍛造職人の仕事は、高温に熱したアルミ鋳造部品を「鍛造プレス機」と呼ばれる機械でプレスし、自動車や自転車などに使われる重要な部品を製造することです。
			</p>
			<div class="images">
				<img src="contents01.jpg" alt="" class="scene">
			</div>
			<p>
				約1,000tもの圧力をかけて、一瞬で金属を鍛えます。<br>
				「叩いて強くする」<br>
				見た目はシンプルですが、実は奥が深く、ものづくりの技術が詰まっている仕事です。
			</p>
			<h3>
				二人一組で進める、チームプレイの仕事
			</h3>
			<p>
				鍛造の仕事は大きく分けて二つの工程があります。それが「鍛造工程」と「トリミング工程」です。
			</p>
			<div class="images">
				<img src="contents02.jpg" alt="" class="scene">
				<img src="contents03.jpg" alt="" class="scene">
			</div>
			<p>
				①鍛造工程：高温のアルミ鋳造部品を鍛造プレス機で成型する<br>
				②トリミング工程：製品として不要な部分をカットし、仕上げる<br>
				この工程を二人一組で担当し、1時間ごとに役割を交代しています。<br>
				特に鍛造工程では、一定のリズムで熱せられたアルミ鋳造部品が流れてくるので、スピード感と集中力が求められる工程です。
			</p>
			<h3>
				シンプルに見えて、実は奥が深い鍛造工程
			</h3>
			<p>
				鍛造工程は、一見「アルミ鋳造部品をプレスするだけ」に思えますが、実査には集中力と技術が必要になる工程です。<br>
				その一つに、「力加減」があります。<br>
				見た目はアルミ色ですが、実際には700℃程度の高温で部品が流れてきます。<br>
				そのため、ハサミを使ってアルミ鋳造部品を持ち上げるのですが、強くつかみすぎると跡がついてしまい、不良品になってしまいます。職人の間隔が試される場面です。
			</p>
			<div class="images">
				<img src="contents04.jpg" alt="" class="scene">
			</div>
			<p>
				二つ目に、「離型剤の吹きかけ」です。<br>
				離型剤は、プレス前にスプレーを使って金型に吹きかけることで、製品が金型にくっつかないようにするためのものです。
			</p>
			<div class="images">
				<img src="contents05.jpg" alt="" class="scene">
				<img src="contents06.jpg" alt="" class="scene">
			</div>
			<p>
				これをプレス前に毎回吹きかけるのですが、近すぎても遠すぎても不良の原因になってしまいます。また吹きかけすぎてもダメで、ちょうどよい吹きかけ具合と距離感があり、自分の中で一番うまく吹きかけられる感覚を掴むことが大切になります。<br>
				最後に「左右の手の連携」です。<br>
				左でではハサミを使って、熱したアルミ鋳造部品を持ち、右手で離型剤を吹きかける。そして左手で金型の正しい位置に部品を設置し、両手を使ってプレスをする。
			</p>
			<div class="images">
				<img src="contents07.jpg" alt="" class="scene">
			</div>
			<p>
				スピード感が求められるため、全ての動作がスムーズでなければ不良品が生まれてしまいます。<br>
				特に最初は左手と右手が別々の動きをすることに、頭が混乱すると思います。
			</p>
			<h3>
				トリミング工程は、製品を仕上げる最後のステップ
			</h3>
			<p>
				鋳造が終わった製品は、トリミング工程に入ります。<br>
				専用のトリミング機械に製品を設置し、両手でボタンを押すことで、自動的に不要な部分をカットしてくれます。
			</p>
			<div class="images">
				<img src="contents08.jpg" alt="" class="scene">
			</div>
			<p>
				鍛造工程と比べると、シンプルで単純な工程ですが、製品の完成度を左右する大事な工程です。
			</p>
			<h3>
				入社後は、トリミング工程で仕事に慣れながら道具の練習をする
			</h3>
			<p>
				入社後は、以下のようなステップで仕事を覚えていきます。<br>
				①トリミング工程を担当しながら、ものづくりに携わる<br>
				②鍛造工程で使用するハサミの使い方を練習する<br>
				③鍛造現場に入り、先輩に補助をしてもらいながら流れを覚える<br>
				④最終的には一人で鍛造工程も担えるようになる。<br>
				特に、鍛造工程で使うハサミの使い方を重点的に練習します。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
					<li>
				<img src="gallery01.jpg" alt="">
			</li>
        <li>
				<img src="gallery02.jpg" alt="">
			</li>
        <li>
				<img src="gallery03.jpg" alt="">
			</li>
			<li>
				<img src="gallery04.jpg" alt="">
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
				<img src="okubo.jpg" alt="">
				<hgroup>
					<h3>大久保祐希</h3>
					<p>
						坂城高校を卒業後、新卒で入社。もともと、アルバイト経験がなく、「工場なら自分でもできそうだ」と思い、入社を決めました。<br>
						鋳造では、部品を金型に入れる作業が重要なので、専用のハサミのような道具を使って、製品を正しい位置にセットする練習を重ねました。<br>
						ですが、最初は道具の扱いが難しく、3日間ほど練習をしてやっとコツを掴むことができました。<br>
						全ての動作がスムーズにいくと、鍛造後の製品も綺麗に仕上がるので、上手くできたと達成感を都度感じられることが、この仕事の面白いところです。
					</p>
				</hgroup>
			</div>
			<p>2013年新卒入社<br>大久保祐希</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="murofushi.jpg" alt="">
				<hgroup>
					<h3>室伏琉音</h3>
					<p>
						地元の高校を卒業後、自転車便やアパレルなどの仕事を経験し、ファインフォーミングに入社しました。<br>
						もともと、趣味でDIYをやっていたため、「鍛造」や「鋳造」というワードに惹かれて入社を決めました。<br>
						初めて仕事を見た時には、「単純作業なのかな」と感じたのですが、やってみたら全然違いました。<br>
						例えば、機械の近くに温度計があるのですが、その日の温度によって離型剤の吹き付け方がまるで変わります。変化に応じて微調整しながら工夫するため、気付いたら交代の時間になっていることが多いです。<br>
						毎日、生産予定数があるのですが、その日の不良件数がゼロで終えると、とっても気持ちいいです。
					</p>
				</hgroup>
			</div>
			<p>2022年中途入社<br>室伏琉音</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="kiuchi.jpg" alt="">
				<hgroup>
					<h3>木内亮</h3>
					<p>
						群馬県の製造業で働いた後、ハローワークでファインフォーミングを見かけ、入社しました。<br>
						幼少期時代から模型製作が好きで、ものづくりに携わる仕事がしたいという想いを持っていました。<br>
						前職は、仕事のルールに沿って進めていく単純な仕事だったのですが、鍛造はその日の温度や離型剤の使い方ひとつで品質が大きく変わるため、「技術を覚える」という面で非常に楽しく仕事をさせていただいています。<br>
						「技術を身に付けたい」と思っている人には、ピッタリの仕事だと思います。
					</p>
				</hgroup>
			</div>
			<p>2021年中途入社<br>木内亮</p>
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
							<dd>鍛造職人</dd>
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
							<dd>〇名</dd>
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
								〇円～
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>【TBD】</dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒386-2203<br>
								長野県上田市真田町傍陽938
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>週休2日制、年間休日〇日（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均19時間位</dd>
						</div>
						<div>
							<dt>就業場所における受動喫煙防止の取組</dt>
							<dd>建物内喫煙不可</dd>
						</div>
					</dl>
					<h3>募集・採用に関する情報</h3>
					<dl>
						<div>
							<dt>前年度の採用実績</dt>
							<dd>〇名</dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd>〇名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd>【TBD】</dd>
						</div>
					</dl>
					<h3>雇用管理状況（令和６年度実績）</h3>
					<dl>
						<div>
							<dt>前年度の月平均所定外労働時間の実績</dt>
							<dd>19時間</dd>
						</div>
						<div>
							<dt>前年度の有給休暇の平均取得日数</dt>
							<dd>7日</dd>
						</div>
						<div>
							<dt>前年度の育児休業取得者数</dt>
							<dd>〇名</dd>
						</div>
						<div>
							<dt>役員/管理職の女性比率</dt>
							<dd>役員 〇%、管理職 〇%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>7年<br>
							※創業以降の実績</dd>
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
