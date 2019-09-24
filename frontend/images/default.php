<!DOCTYPE html>
<html lang="<?=$lang;?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="https://printhub.ua/ru/">
    <meta charset="utf-8" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N2GZ4T6');</script>
    <!-- Google Tag Manager -->
    <?=$this->getMeta()?>
    <link rel="shortcut icon" type="image/png" href="/images/caple.png"/>
    <link href="/css/style-min.css" type="text/css" rel="stylesheet" media="all">
    <link rel="alternate" hreflang="ua" 
    href="https://www.printhub.ua/ua/<?php
            if($this->controller !== "Main"){
                    echo str_replace("/".$lang."/","",$_SERVER['REQUEST_URI']) ;
                }else{
                    echo "";
                }
            ;?>">
    <link rel="alternate" hreflang="en" 
    href="https://www.printhub.ua/en/<?php
            if($this->controller !== "Main"){
                    echo str_replace("/".$lang."/","",$_SERVER['REQUEST_URI']) ;
                }else{
                    echo "";
                }
            ;?>">
    <link rel="alternate" hreflang="x-default" 
    href="https://www.printhub.ua/ru/<?php
            if($this->controller !== "Main"){
                    echo str_replace("/".$lang."/","",$_SERVER['REQUEST_URI']) ;
                }else{
                    echo "";
                }
            ;?>">
</head>




<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2GZ4T6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header class="main-header">   
    <div class="first-part">
        <div class="cell phone-header">
            <i class="fas fa-phone-alt"></i>
            <a href="tel:+380931707963" aria-label="number-printhub">+380931707963</a>
            <i class="fas fa-phone-alt"></i>
            <a href="tel:+380442329580" aria-label="number-printhub">+380442329580</a>
        </div>
        <div class="cell mail-header">
            <i class="fas fa-envelope"></i>
            <a href="mailto:example@email.com">sales@printhub.ua</a>
        </div>
        <div class="cell hours-header">
            <i class="far fa-clock"></i>
            <?php __('time-open');?>
        </div>
        <div class="cell social-header">
            <i class="fab fa-instagram"></i>
            <a href="#">printhub_ua</a>
            <i class="fab fa-facebook-square"></i>
            <a href="#">printhub.ua</a>
        </div>
        <?php new app\widgets\language\Language();?>
    </div>
    <div class="second-part">
        <div class="logo-main">
            <a href="/<?=$lang;?>"><img src="/images/logo_black_72-01.png" width="200px"></a>
        </div>
        <div class="menu-cattegory">
            <nav class="menu">
                <?php $mobile = ['mobile' => 'false', 'lang_code' => $lang];?><?php new app\widgets\menu\menu($mobile);?>    
            </nav>
        </div>
        <button class="burger-btn">
            <img src="/images/icons8-menu.png" alt="">
        </button>
    </div>
    <div class="navMobile">
        <button class="close">
            <span></span>
            <span></span>
        </button>
        <nav class="main_nav">
            <?php $mobile = ['mobile' => 'true', 'lang_code' => $lang];new app\widgets\menu\menu($mobile);?>    
        </nav>
    </div>
</header> 


<?php echo $content;?>


<footer class="footer">
    <div class="containerF">
        <div class="col col-1 aboutF">
            <a href="/<?=$lang;?>"><img src="/images/logo_black_72-01.png" width="200px"></a>
            <p class="textF"><?php __('footer-text-first');?></p>
            <p class="textF"><?php __('footer-text-second');?></p>
        </div>
        <div class="col col-2 navigationF">
            <h3 class="titleF"><?php __('navigation-menu');?></h3>
            <ul class="listF">
                <li>
                    <p><a href="/<?=$lang;?>/product"><?php __('products-menu');?></a></p>
                </li>
                <li>
                    <p><a href="/<?=$lang;?>/service"><?php __('service-menu');?></a></p>
                </li>
                <li>
                    <p><a href="/<?=$lang;?>/materials"><?php __('materials-menu');?></a></p>
                </li>
                <li>
                    <p><a href="/<?=$lang;?>/rules" class="scroll"><?php __('rules-menu');?></a></p>
                </li>
                <li>
                    <p><a href="/<?=$lang;?>/delivery"><?php __('delivery-menu');?></a></p>
                </li>
                <li>
                    <p><a href="/<?=$lang;?>/contacts"><?php __('contacts-menu');?></a></p>
                </li>
            </ul>
        </div>
        <div class="col col-2 contactsF">
            <h3 class="titleF"><?php __('contacts-menu');?></h3>
            <div class="hoursF">
                <p><i class="far fa-clock" style="margin-right: 15px"></i><?php __('time-open');?></p>
            </div>
            <div class="mailF">
                <p><i class="fas fa-envelope" style="margin-right: 15px"></i><a href="mailto:example@email.com">sales@printhub.ua</a></p>
            </div>
            <div class="contactF">
                <p><i class="fas fa-phone-alt" style="margin-right: 15px"></i><a href="tel:+380931707963" aria-label="number-printhub">+380931707963</a></p>
            </div>
            <div class="contactF">
                <p><i class="fas fa-phone-alt" style="margin-right: 15px"></i><a href="tel:+380442329580" aria-label="number-printhub">+380442329580</a></p>
            </div>
            <div class="socialF"> 
                <p><i class="fab fa-instagram" style="margin-right: 15px"></i><a href="#">printhub_ua</a></p>
                <p><i class="fab fa-facebook-square" style="margin-right: 15px"></i><a href="#">printhub.ua</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- /*************/CREATEAD_BY/SEVERINENKO/IN_TWO_WEEKS/0661985365/******************/ -->

<script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/js/megamenu.js"></script>
<script src="https://kit.fontawesome.com/91276998d5.js"></script>
</body>

</html>