<?php
include_once './my_conf.php';
include_once './my_stat_0976767.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>


  <meta charset="utf-8">
  <title>Meileyi - Мультислайсер для овощей и фруктов</title>
  <meta name="description" content="Meileyi - Мультислайсер для овощей и фруктов. Купить со скидкой!">
  <meta name="keywords" content="Meileyi, купить Meileyi, Мультислайсер, Мультислайсер отзывы" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta name="theme-color" content="#acdd00">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=510">

  <!-- CSS -->

  <style>
    <?php $cssFiles=array("css/style.css"
    );

    $buffer="";

    foreach ($cssFiles as $cssFile) {
      $buffer .=file_get_contents($cssFile);
    }

    $buffer=preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    $buffer=str_replace(': ', ':', $buffer);
    $buffer=str_replace(array("../", "\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    echo($buffer);
    ?>
  </style>


<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '<?=$fbpxid?>');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=<?=$fbpxid?>&ev=PageView&noscript=1"
	/></noscript>
</head>

<body>

  <div class="container">
    <div class="landing">
      <picture class="landing-bg-1">
        <source srcset="img/bg.webp" type="image/webp"><img src="img/bg.jpg" alt=""></picture>
      <picture class="landing-bg-2">
        <source srcset="img/bg2.webp" type="image/webp"><img src="img/bg2.jpg" alt=""></picture>
      <div class="gift">
        <img src="gift.png" alt="">
        <p>+2 сменные насадки!</p>
      </div>
      <div class="gift gift-bottom">
        <img src="gift.png" alt="">
        <p>+2 сменные насадки!</p>
      </div>
      <div class="gift gift-center">
        <img src="gift.png" alt="">
      </div>
      <div class="gift gift-center2">
        <img src="gift.png" alt="">
      </div>
      <div class="price1">
        <div class="price__old">
          Старая цена
          <br>
          <span class="old_price_val"><span class="price_land_s2"><?=$oldprice?></span></span>
          <span class="old_price_cur"><span class="price_land_curr">грн.</span></span>
        </div>
        <div class="price__new">
          По акции
          <br>
          <span class="new_price_val"><span class="price_land_s1"><?=$price?></span></span>
          <span class="new_price_cur"><span class="price_land_curr">грн.</span></span>
        </div>
      </div>
      <div class="landing__btn">
        <a href="#form" data-toggle="scroll">заказать со скидкой</a>
      </div>
      <div class="landing__count1">
        <div class="count">Товаров по акции осталось: <span>4</span> шт.</div>
      </div>
      <div class="landing__video">
        <div>
          <!-- <iframe width="641" height="360" src="https://www.youtube.com/embed/hAdBrxmrvO0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
          <div class="youtube" id="hAdBrxmrvO0"></div>

        </div>
      </div>
      <div class="landing__carousel1">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="feed-img">
              <img src="img/slide1.jpg" alt="">
            </div>
          </div>
          <div class="item">
            <div class="feed-img">
              <img src="img/slide2.jpg" alt="">
            </div>
          </div>
          <div class="item">
            <div class="feed-img">
              <img src="img/slide3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="landing__carousel2">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="feed-img">
              <img src="img/slide4.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="feed-img">
              <img src="img/slide5.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="feed-img">
              <img src="img/slide6.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="price2">
        <div class="price__old">
          Старая цена
          <br>
          <span class="old_price_val"><span class="price_land_s2"><?=$oldprice?></span></span>
          <span class="old_price_cur"><span class="price_land_curr">грн.</span></span>
        </div>
        <div class="price__new">
          По акции
          <br>
          <span class="new_price_val"><span class="price_land_s1"><?=$price?></span></span>
          <span class="new_price_cur"><span class="price_land_curr">грн.</span></span>
        </div>
      </div>
      <form class="form landing__from orderformcdn" id="form" action="order.php" method="post">
        <div class="form__list">

          <div class="form__item">
            <input type="text" class="form__input" placeholder="Ваше имя" name="name" required="">
          </div>
          <div class="form__item">
            <input type="tel" class="form__input phone__mask" placeholder="Номер телефона" name="phone" required="">
          </div>
          <div class="form__item form__item_btn">
            <input type="submit" class="form__btn" value="Заказать со скидкой">
          </div>
        </div>
      </form>
      <div class="landing__count2">
        <div class="count">Товаров по акции осталось: <span>4</span> шт.</div>
      </div>
    </div>

    <div class="copyright">
      <p style="text-align: center">
        <a href="/politics.html" target="_blank">Политика конфиденциальности</a>
      </p>
    </div>
  </div>



  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">


  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/previewYouTube.js"></script>
  <script type="text/javascript" src="js/maskedinput.js"></script>

</body>

</html>