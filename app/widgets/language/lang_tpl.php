
<div class="language-variable">
	<div class="variable">
		<div class="variable active">
			<a href="/<?=$this->language['code'];?>/<?php
			if($this->controller !== "Main"){
					echo str_replace("/".$this->language['code']."/","",$_SERVER['REQUEST_URI']) ;
				}else{
					echo "";
				}
			;?>"><?=$this->language['code'];?></a>
		</div>
	</div>
	<?php foreach ($this->languages as $k => $v): ?>
		<?php if($this->language['code'] != $k): ?>
			<div class="variable">
				<a href="/<?=$k;?>/<?php  

				if($this->controller !== "Main"){
					echo str_replace("/".$this->language['code']."/","",$_SERVER['REQUEST_URI']);
				}else{
					echo "";
				};
				?>"><?=$k;?></a>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>