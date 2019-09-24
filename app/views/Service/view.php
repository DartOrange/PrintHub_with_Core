
<div class="serviceC">
  <div class="mainPH">
    <h1 style="display: none;"><?= $service['title'];?></h1>
    <h2><?= $service['title'];?></h2>
  </div>
  <div class="contentSB">
    <div class="contWithIMG">
      <div class="contFir">
        <?= $service['body'];?>
      </div>
      <div class="contImg">
        <img src="<?= $service['image'];?>">
      </div>
    </div>
    <div class="contSec">
      <?= $service['body_second'];?>
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
        <img src="<?= $service['image_alias'];?>-1.png">
      </div>
      <div class="imgS">
        <img src="<?= $service['image_alias'];?>-2.png">
      </div>
      <div class="imgT">
        <img src="<?= $service['image_alias'];?>-3.png">
      </div>
    </div>
  </div>
</div>

