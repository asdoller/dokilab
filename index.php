<!DOCTYPE html>
<html lang="ja">

<?php include 'head.php'; ?> <!-- head.php の読み込み -->

<body>
<?php
$pdo = new PDO('mysql:charset=UTF8;dbname=db1;host=localhost', 'root', 'root');
$query = "SELECT * FROM company";
$res = $pdo->query($query);
$companyData = $res->fetchAll();

require_once('config.php');

$areaCount = [
    0 => "",
];
for ($i = 1; $i <= 49; $i++) {
    array_push($areaCount, 0);
}

foreach ($companyData as $company) {
    if (preg_match('/01/', $company['areaCode'])) $areaCount[1]++;
    if (preg_match('/02/', $company['areaCode'])) $areaCount[2]++;
    if (preg_match('/03/', $company['areaCode'])) $areaCount[3]++;
    if (preg_match('/04/', $company['areaCode'])) $areaCount[4]++;
    if (preg_match('/05/', $company['areaCode'])) $areaCount[5]++;
    if (preg_match('/06/', $company['areaCode'])) $areaCount[6]++;
    if (preg_match('/07/', $company['areaCode'])) $areaCount[7]++;
    if (preg_match('/08/', $company['areaCode'])) $areaCount[8]++;
    if (preg_match('/09/', $company['areaCode'])) $areaCount[9]++;
    if (preg_match('/10/', $company['areaCode'])) $areaCount[10]++;
    if (preg_match('/11/', $company['areaCode'])) $areaCount[11]++;
    if (preg_match('/12/', $company['areaCode'])) $areaCount[12]++;
    if (preg_match('/13/', $company['areaCode'])) $areaCount[13]++;
    if (preg_match('/14/', $company['areaCode'])) $areaCount[14]++;
    if (preg_match('/15/', $company['areaCode'])) $areaCount[15]++;
    if (preg_match('/16/', $company['areaCode'])) $areaCount[16]++;
    if (preg_match('/17/', $company['areaCode'])) $areaCount[17]++;
    if (preg_match('/18/', $company['areaCode'])) $areaCount[18]++;
    if (preg_match('/19/', $company['areaCode'])) $areaCount[19]++;
    if (preg_match('/20/', $company['areaCode'])) $areaCount[20]++;
    if (preg_match('/21/', $company['areaCode'])) $areaCount[21]++;
    if (preg_match('/22/', $company['areaCode'])) $areaCount[22]++;
    if (preg_match('/23/', $company['areaCode'])) $areaCount[23]++;
    if (preg_match('/24/', $company['areaCode'])) $areaCount[24]++;
    if (preg_match('/25/', $company['areaCode'])) $areaCount[25]++;
    if (preg_match('/26/', $company['areaCode'])) $areaCount[26]++;
    if (preg_match('/27/', $company['areaCode'])) $areaCount[27]++;
    if (preg_match('/28/', $company['areaCode'])) $areaCount[28]++;
    if (preg_match('/29/', $company['areaCode'])) $areaCount[29]++;
    if (preg_match('/30/', $company['areaCode'])) $areaCount[30]++;
    if (preg_match('/31/', $company['areaCode'])) $areaCount[31]++;
    if (preg_match('/32/', $company['areaCode'])) $areaCount[32]++;
    if (preg_match('/33/', $company['areaCode'])) $areaCount[33]++;
    if (preg_match('/34/', $company['areaCode'])) $areaCount[34]++;
    if (preg_match('/35/', $company['areaCode'])) $areaCount[35]++;
    if (preg_match('/36/', $company['areaCode'])) $areaCount[36]++;
    if (preg_match('/37/', $company['areaCode'])) $areaCount[37]++;
    if (preg_match('/38/', $company['areaCode'])) $areaCount[38]++;
    if (preg_match('/39/', $company['areaCode'])) $areaCount[39]++;
    if (preg_match('/40/', $company['areaCode'])) $areaCount[40]++;
    if (preg_match('/41/', $company['areaCode'])) $areaCount[41]++;
    if (preg_match('/42/', $company['areaCode'])) $areaCount[42]++;
    if (preg_match('/43/', $company['areaCode'])) $areaCount[43]++;
    if (preg_match('/44/', $company['areaCode'])) $areaCount[44]++;
    if (preg_match('/45/', $company['areaCode'])) $areaCount[45]++;
    if (preg_match('/46/', $company['areaCode'])) $areaCount[46]++;
    if (preg_match('/47/', $company['areaCode'])) $areaCount[47]++;
    if (preg_match('/48/', $company['areaCode'])) $areaCount[48]++;
    if (preg_match('/49/', $company['areaCode'])) $areaCount[49]++;
}
?>

<div id="container">

    <?php include 'header.php'; ?> <!-- header.php の読み込み -->

    <div id="contents">

        <div class="inner">

            <section id="top-contents">

                <h2 class="c big1">勤務地で探す</h2>

                <div id="map-select">
                    <select onChange="location.href=value;">
                        <option value="#">都道府県から選択する</option>

                        <?php
                        foreach ($todofuken as $code => $spot) {
                            if (0 == strcmp($spot, '海外')) break;
                            ?>
                            <option value="area.php?area=<?= $code ?>"><?= $spot ?></option>
                            <?php
                        }
                        ?>

                    </select>
                </div>

                <ul id="menu-text">
                    <li><span class="color1">＊登録企業数</span>：<a href="area.php"><?= count($companyData) ?>社</a></li>
                </ul>

                <ul id="menu-photo">
                    <li class="global"><span>グローバル</span>
                        <a href="area.php?area=48">海外で働ける企業はこちら</a>
                    </li>
                    <li class="telework"><span>テレワーク</span>
                        <a href="area.php?area=49">在宅で働ける企業はこちら</a>
                </ul>

                <ul id="map">
                    <li class="area01"><a href="area.php?area=01"><?= $todofuken['01'] ?><br><?= $areaCount[1] ?>件</a></li>
                    <?php for ($i = 2; $i<=7; $i++) { ?>
                    <li class="tohoku"><a href="area.php?area=0<?= $i ?>" class="area0<?= $i ?>"><?= $todofuken['0'.$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>
                    <?php for ($i = 8; $i<=9; $i++) { ?>
                        <li class="kanto"><a href="area.php?area=0<?= $i ?>" class="area0<?= $i ?>"><?= $todofuken['0'.$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>
                    <?php for ($i = 10; $i<=14; $i++) { ?>
                        <li class="kanto"><a href="area.php?area=<?= $i ?>" class="area<?= $i ?>"><?= $todofuken[$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>
                    <?php for ($i = 15; $i<=23; $i++) { ?>
                        <li class="tyubu"><a href="area.php?area=<?= $i ?>" class="area<?= $i ?>"><?= $todofuken[$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>
                    <?php for ($i = 24; $i<=30; $i++) { ?>
                        <li class="kansai"><a href="area.php?area=<?= $i ?>" class="area<?= $i ?>"><?= $todofuken[$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>
                    <?php for ($i = 31; $i<=35; $i++) { ?>
                        <li class="cyugoku"><a href="area.php?area=<?= $i ?>" class="area<?= $i ?>"><?= $todofuken[$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>
                    <?php for ($i = 36; $i<=39; $i++) { ?>
                        <li class="shikoku"><a href="area.php?area=<?= $i ?>" class="area<?= $i ?>"><?= $todofuken[$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>
                    <?php for ($i = 40; $i<=47; $i++) { ?>
                        <li class="kyusyu"><a href="area.php?area=<?= $i ?>" class="area<?= $i ?>"><?= $todofuken[$i] ?><br><?= $areaCount[$i] ?>件</a></li>
                    <?php } ?>

                </ul>
                <!--/#map-->

            </section>
            <!--/#top-contents-->

            <div id="main">

                <section id="new">
                    <h2>更新情報・お知らせ</h2>
                    <dl>
                        <dt>2022/06/02</dt>
                        <dd>「エリアページ」「企業詳細ページ」をシステムしました。</dd>
                        <dt>2022/05/25</dt>
                        <dd>「職種で探すページ」「業種で探すページ」のデザインを制作しました。</dd>
                        <dt>2022/05/22</dt>
                        <dd>「企業詳細ページ」のデザインを制作しました。</dd>
                        <dt>2022/05/21</dt>
                        <dd>「ヘッダー」と「フッター」および「企業一覧ページ」のデザインを制作しました。</dd>
                        <dt>2022/05/20</dt>
                        <dd>「勤務地で探すページ」のデザインを制作しました。</dd>
                        <dt>2022/05/19</dt>
                        <dd>「どきらぼ」の開発スタート。</dd>
                    </dl>
                    <p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
                </section>

            </div>
            <!--/#main-->

            <div id="sub">

                <?php include 'recommend.php'; ?> <!-- recommend.php の読み込み -->

            </div>
            <!--/#sub-->

        </div>
        <!--/.inner-->

    </div>
    <!--/#contents-->

    <?php include 'footer.php'; ?> <!-- footer.php の読み込み -->

</div>
<!--/#container-->

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　800px以下-->
<script>
    if (OCwindowWidth() <= 800) {
        open_close("menubar_hdr", "menubar-s");
    }
</script>

<!--「物件を借りる」の子メニュー-->
<script>
    if (OCwindowWidth() <= 800) {
        open_close("menubar_hdr2", "menubar-s2");
    }
</script>

<!--「物件を買う」の子メニュー-->
<script>
    if (OCwindowWidth() <= 800) {
        open_close("menubar_hdr3", "menubar-s3");
    }
</script>

</body>
</html>
