<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch_copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
$meta_keywords = $occupation[$last_segment]['keyword'] ?? '';
$meta_desc = $occupation[$last_segment]['description'] ?? '';


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
$title = $name . ' - ' . $co['company_name'] . 'の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = $meta_desc;
$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/' . $last_segment . '/';
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
		"item": "https://works.mekulo.jp/hs/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/"
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="first_view.jpg">
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
		不良品を見逃さない！精密な検査が、品質を支えている。
	</h3>
	<p>
		検査の仕事は、すべての部品が図面通りに加工・組立されているか、さまざまな測定器具や検査装置を使って確認することです。
	</p>
	<div class="images grid-images">
		<img src="contents01.jpg" alt="" class="scene">
		<img src="contents02.jpg" alt="" class="scene">
		<img src="contents03.jpg" alt="" class="scene">
	</div>
	<p>
		ミスを見つけるのが目的ではありません。<br>
        “正確な製品だけを世に出す”ための最終防衛線としての役割を担う、極めて重要なポジションです。
	</p>
	<div class="images">
		<img src="contents04.jpg" alt="" class="scene">
	</div>
	<p>
		使うのは、ノギスやマイクロメーター、シリンダーゲージなど、棚一杯に並ぶ検査器具たち。検査内容によって器具を選びます。
	</p>
	<div class="images">
		<img src="contents05.jpg" alt="" class="scene">
	</div>
	<p>
		三次元測定機という機械を操作することもあります。
	</p>
	<div class="images">
		<img src="contents06.JPG" alt="" class="scene">
		<img src="contents07.jpg" alt="" class="scene">
	</div>
	<p>
		人からの言葉ではなく、自分の目で確かめないと気が済まないタイプや、細かいことにこだわりがある人に向いている仕事です。
	</p>
	<h3>
		狙った数値が出た瞬間の快感
	</h3>
	<p>
		検査で扱うのは、0.001ミリ単位の世界。<br>
        ミスが許されない緊張感がある一方で、精密さを突き詰める面白さもあります。
	</p>
	<div class="images">
		<img src="first_view.jpg" alt="" class="scene">
	</div>
	<p>
		たとえば、加工担当とのやりとりで「あとこのくらい削ったらぴったりいくと思います」と伝え、それが実際に狙い通りの数値になる――。そんなときは検査担当として、心の中でガッツポーズをしてしまいます。<br>
		また、納期が迫る中での調整や他部署との連携も、品質保証の大切な仕事のひとつです。
	</p>
	<h3>
		図面が初めてでも大丈夫！
	</h3>
	<p>
		入社後は、検査器具の正しい使い方や図面の読み方から覚えていきます。<br>
		最初の２週間は先輩がつきっきりでサポートしてくれるので、未経験でも安心して学べます。
	</p>
	<div class="images">
		<img src="contents08.jpg" alt="" class="scene">
	</div>
	<p>
		図面を見るのが初めての人でも、半年ほどで基本をマスターできます。<br>
        平面を見て立体をイメージする力が必要になるので、プラモデルや工作が好きな人は、よりスムーズに理解できるかもしれません。
	</p>
	<div class="images">
		<img src="contents09.JPG" alt="" class="scene">
	</div>
	<p>
		ただ測るだけでなく、「なぜこの検査が必要なのか」を自分の言葉で説明できるようになるのも、大切な成長の一歩です。
	</p>
	<h3>
		社会のどこかで使われるという誇り
	</h3>
	<p>
		検査は、ただの確認作業ではなく、品質を保証する責任ある仕事です。<br>
        気になることをそのままにしない。理由を徹底的に考える。そんなあなたの探求心が、検査という仕事で活かされるでしょう。
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
	<li>
		<img src="gallery05.jpg" alt="">
	</li>
	<li>
		<img src="gallery06.jpg" alt="">
	</li>
	<li>
		<img src="gallery07.jpg" alt="">
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
				<img src="koyama.jpg" alt="">
				<hgroup>
					<h3>小山さん</h3>
					<p>
						入社したきっかけは、転職活動中にたまたま求人を見つけたことです。<br>
                        実は祖父もこの会社で加工の仕事をしていたので、なんとなくご縁を感じて「やってみたい」と思いました。<br>
                        細かい作業が好きで、同じことにコツコツ向き合うのも得意だったので、検査の仕事は私にぴったりでした。1/1000ミリの世界なので最初は苦労しましたが、狙った数値がピタッと出たときは「やってやったぞ！」とテンションが上がります。<br>
                        休日は恋人と出かけたり、ゲームをしたり。散歩に行くのも気分転換になります。
                    </p>
				</hgroup>
			</div>
			<p>入社8年目<br>小山さん</p>
		</li>
	</ul>
</section>
<section class="g requirements" id="recruitment_requirements">
	<h2>募集要項</h2>
	<div class="tabs">
		<button class="tab1">募集要項</button>
		<button class="tab2">青少年雇用情報</button>
		<button class="tab3">選考方法</button>
	</div>
	<div class="requirement">
		<div class="content recruitment">
			<h3>仕事内容</h3>
			<dl>
				<div>
					<dt>募集職種</dt>
					<dd>検査（品質保証）</dd>
				</div>
				<div>
					<dt>雇用形態</dt>
					<dd>正社員</dd>
				</div>
				<div>
					<dt>雇用期間</dt>
					<dd>定めなし</dd>
				</div>
				<div>
					<dt>契約更新の可能性</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>試用期間</dt>
					<dd>あり（3か月）</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒386-0404<br>
					長野県上田市上丸子1082</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田丸子線 丸子駅から徒歩5分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋内禁煙</dd>
				</div>
				<div>
					<dt>マイカー通勤</dt>
					<dd>可</dd>
				</div>
				<div>
					<dt>転勤の可能性</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>必要な知識・技能等</dt>
					<dd>不問</dd>
				</div>
			</dl>
			<h3>賃金・手当</h3>
			<dl>
				<div>
					<dt>賃金形態</dt>
					<dd>月給</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>20.8日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>170,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>170,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当</dt>
					<dd>出勤（皆勤）手当（3,000円）</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月15日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>実費支給（上限なし）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり（前年度実績3%）</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>あり（年2回、1.5か月分）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>変形労働時間制（1か月単位）<br>8時10分～17時00分<br>17時10分～2時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均20時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土、日、その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年末年始、お盆、GWなど<br>会社カレンダーによる</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、財形保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>厚生年金基金、確定拠出年金</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続1年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>60歳</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限65歳まで）</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>入居可能住宅</dt>
					<dd>なし</dd>
				</div>
			</dl>
		</div>
		<div class="content career">
			<h3>青少年雇用情報</h3>
			<dl>
				<div>
					<dt>直近3年間の新卒者等採用者数</dt>
					<dd>前年度:1人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:1人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						15年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>44歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>社内新卒者研修、外部研修</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり
					</dd>
				</div>
				<div>
					<dt>自己啓発支援内容</dt>
					<dd>入社後、仕事に必要な資格の取得を支援します（費用の負担、講習等は出勤扱いとする）</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>20時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>10日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：0人、男性：0人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>0名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>15%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>-</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>1人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						随時開催
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後10日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						管理部 総務経理課<br>
						吉池
					</dd>
				</div>
			</dl>
		</div>
	</div>
	<div>
		<a href="../apply/#entry" class="btn_entry">
			<img src="../../../flag.png" class="flag">
			<span>応募前見学情報を見る</span>
			<img src="../../../arrow.svg">
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
                            <img src="<?= $company_base . $prop['image'] ?>" alt="">
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
<?php //include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
