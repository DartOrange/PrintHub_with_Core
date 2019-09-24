<?php 

$parent = isset($category['childs']); 
$addMobileClass = "";
$id = $category['parent_id'];
if ($mobile == "true") {
	$addMobileClass = "-mobile";
}
?>

<li class="menu-item<?=$addMobileClass;?>">

	<?php if($parCheck == 'false'): ?>
    	<a href="/<?=$lang_code;?>/<?=$category['alias'];?>"><?=$category['title'];?></a>
	<?php endif; ?>
	<?php if($parCheck == 'true'): ?>
    	<a href="/<?=$lang_code;?>/<?=$alias;?>/<?=$category['alias'];?>"><?=$category['title'];?></a>
	<?php endif; ?>
    <?php if(isset($category['childs'])): ?>
    	<?php if($mobile == "true"){ ?>
	    	<span class="arrow-icon-nav js-show-sub-menu"></span>
		<?php }; ?> 
	<?php endif; ?>

    <?php if(isset($category['childs'])): ?>
    	<?php if($mobile == "false"){ ?>
    		<div class="sub-menu-wrap<?=$addMobileClass;?>">
    	<?php }; ?> 
	        <ul class="sub-menu<?=$addMobileClass;?>">
	            <?= $this->getMenuHtml($category['childs'], $mobile, $lang_code, 'true', $category['alias']);?>
	        </ul>
	    <?php if($mobile == "false"){ ?>
	    	</div>
	   	<?php }; ?> 
    <?php endif; ?>
    <?php if(!isset($category['childs'])){ ?>
    	<?php if($mobile == "false"){ ?>
    		<?php if($category['image'] !== ""){ ?>
		        <div class="sub-item">
		        	<img src="<?= $category['image'];?>">
		        </div> 
			<?php } ?>    
	    <?php } ?> 
    <?php }; ?>
</li>