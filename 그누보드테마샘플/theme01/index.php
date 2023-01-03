<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



        <main>
            <!-- <ul>
                <li><a href="<?php echo G5_THEME_URL; ?>/doc/m01.php?tab=1">link01</a></li>
                <li><a href="<?php echo G5_THEME_URL; ?>/doc/m01.php?tab=2">link02</a></li>
                <li><a href="<?php echo G5_THEME_URL; ?>/doc/m01.php?tab=3">link03</a></li>
            </ul> -->
            <section id="mainVisual">
                <div class="main_slide">
<?
	for($i=0; $i<count($as_img); $i++)
	{
		echo "
        <div class='itm'>
            <h3>".$as_img_title[$i]."</h3>
            <strong>".mb_substr($as_img_dec[$i], 0 , 30)."</strong>
            <p>".$as_img_dec[$i]."</p>
        </div>
        ";
	}
?>
                </div>
                <figure class="slogan">
                    <img src="<?php echo G5_THEME_URL; ?>/img/slogan.png" alt="">
                </figure>
                <ul class="link">
                    <li class="itm">
                        <a href="<?php echo G5_THEME_URL; ?>/doc/m01.php">
                            <span class="bg"></span>
                            <strong><?=$as_title?></strong>
                        </a>
                    </li>
<?
	for($i=0; $i<count($as_img); $i++)
	{
		echo "
        <li class='itm'>
            <a href=".G5_THEME_URL."/doc/m0".($i+2).".php>
            <span class='bg'></span>
            <strong>".$as_img_title[$i]."</strong>
            </a>
        </li>
        ";
	}
?>

                    <li class="customer">
                        <a href="tel:<?=$as_tel?>">
                        <?=$as_tel?>
                        </a>
                        <p>
                            <?=$as_slogan?>
                        </p>
                        <i class="xi-user-plus-o"></i>
                    </li>
                </ul>
            </section>
            <section id="customer">
                <div class="inner">
<?
	for($i=0; $i<count($as_img); $i++)
	{
		echo "
            <figure>
            <a href=".G5_THEME_URL."/doc/m0".($i+1).".php>
            <div class='box'>
                <img src=".$as_img[$i].">
            </div>
            <h3>".$as_img_title[$i]."</h3>
            <p>".$as_img_dec[$i]."</p>
            </a>
            </figure>
        ";
	}
?>
                </div>
            </section>

            <section id="notice">
                <div class="inner">
                    <div class="notice">
                        <h3>news &amp; notice</h3>
                    <?php
	echo latest('theme/notice', 'notice', 4, 23);	
    ?>
                    </div>
                    <div class="map">
                        <div class="case">
<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1672316550484" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1672316550484",
		"key" : "2d8nj",
		//"mapWidth" : "640",
		//"mapHeight" : "360"
	}).render();
</script>
                        </div>

                    </div>
                </div>

            </section>
        </main>




<?php
include_once(G5_THEME_PATH.'/tail.php');