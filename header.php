<header>
    <div class="inner">
        <h1 id="logo"><a href="index.php"><img src="images/dokilab_logo.jpg" alt="どきらぼ" width="200"></a></h1>
        <div id="tel">就活生のための<br><span>企業研究ツール</span></div>
    </div>
</header>

<?php $filepath = pathinfo($_SERVER['REQUEST_URI']); ?>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar" class="nav-fix-pos">
    <ul class="inner">
        <li class="<?= $filepath['filename'] === 'index' ? 'current' : '' ?>"><a href="index.php">勤務地で探す</a></li>
        <li class="<?= $filepath['filename'] === 'industry' ? 'current' : '' ?>"><a href="industry.php">業種で探す</a></li>
        <li class="<?= $filepath['filename'] === 'occupation' ? 'current' : '' ?>"><a href="occupation.php">職種で探す</a></li>
        <li class="<?= $filepath['filename'] === 'search' ? 'current' : '' ?>"><a href="search.php">社名で検索する</a></li>
        <li class="<?= $filepath['filename'] === 'contact' ? 'current' : '' ?>"><a href="contact.php">お問い合わせ</a></li>
    </ul>
</nav>

<!--小さい端末用（800px以下端末）メニュー-->
<nav id="menubar-s" style="display: none;">
    <ul class="inner">
        <li><a href="index.php">勤務地で探す</a></li>
        <li><a href="industry.php">業種で探す</a></li>
        <li><a href="occupation.php">職種で探す</a></li>
        <li><a href="search.php">社名で検索する</a></li>
        <li><a href="contact.php">お問い合わせ</a></li>
    </ul>
</nav>
