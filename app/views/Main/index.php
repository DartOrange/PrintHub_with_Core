        
<div class="printhub main">
    <div class="header-title">
        <h1 style="display: none;"><?php __('printhub-main-header');?></h1>
        <h2><?php __('printhub-main-header');?></h2>
    </div>
    <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade img-1">
      </div>

      <div class="mySlides fade img-2">
      </div>

      <div class="mySlides fade img-3">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center; margin-bottom: 5%;">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <div class="our-services">
        <div class="header-bl">
           <h2><?php __('we-are-give');?></h2> 
        </div>
        <div class="services-bl">
           <ul>
                <li><a href="/<?=$lang;?>/service/cifra"><?php __('cifra-print');?></a></li>
                <li><a href="/<?=$lang;?>/service/offset"><?php __('offset-print');?></a></li>
                <li><a href="/<?=$lang;?>/service/ufprint"><?php __('shelkot-print');?></a></li>
                <li><a href="/<?=$lang;?>/service/ufprint"><?php __('uf-print');?></a></li>
                <li><a href="/<?=$lang;?>/service/postprint"><?php __('post-print');?></a></li>
                <li><a href="/<?=$lang;?>/service/postprint"><?php __('reklama-print');?></a></li>
           </ul> 
        </div>
    </div>
    <div class="prod-bg">
        <div class="prod-bl">
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/service/offset"><img src="/images/prodbl/listovaya.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-list');?></a>
                </div>
            </div>
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/service/postprint"><img src="/images/prodbl/suvenirnaya.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-suvenir');?></a>
                </div>
            </div>
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/service/postprint"><img src="/images/prodbl/convert.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-convert');?></a>
                </div>
            </div>
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/product/bloknot"><img src="/images/prodbl/bloknot.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-bloknot');?></a>
                </div>
            </div>
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/product/bukleti"><img src="/images/prodbl/buklet.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-buklet');?></a>
                </div>
            </div>
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/product/flaera"><img src="/images/prodbl/flayer.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-flaer');?></a>
                </div>
            </div>
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/product/flaera"><img src="/images/prodbl/listovki.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-listovka');?></a>
                </div>
            </div>
            <div class="elem-bl">
                <div class="img-bl">
                    <a href="/<?=$lang;?>/product/vizitki"><img src="/images/prodbl/vizitki.png"></a>
                </div>
                <div class="expl-bl">
                    <a><?php __('prod-vizitki');?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/slider.js"></script>