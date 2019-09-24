<div class="serviceC">
  <div class="mainPH">
    <h1 style="display: none;"><?= $product['title'];?></h1>
    <h2><?= $product['title'];?></h2>
  </div>
  <div class="contentSB">
    <div class="contWithIMG">
      <div class="contFir">
        <?= $product['body'];?>
      </div>
      <div class="contImg">
        <img src="<?= $product['image'];?>">
      </div>
    </div>
    <div class="contSec">
      <?= $product['body_second'];?>
    </div>
    <div class="niceHyper">
      <a href="/download/pr_print.pdf"><span>→</span><?php __('price');?><span>←</span></a>
    </div>
  </div>
  <div class="examples">
    <div class="examplH">
      <h2><?php __('work_examples');?></h2>
    </div>
    <div class="examplIMG">
      <div class="imgF">
        <img src="<?= $product['image_alias'];?>-1.jpg">
      </div>
      <div class="imgS">
        <img src="<?= $product['image_alias'];?>-2.jpg">
      </div>
      <div class="imgT">
        <img src="<?= $product['image_alias'];?>-3.jpg">
      </div>
    </div>
  </div>
</div>