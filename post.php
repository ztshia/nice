<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
								<?php _e(' '); ?><?php  date_default_timezone_set("Asia/Shanghai"); $this->date('D, M jS, Y'); ?></p>
				
			
			<?php $this->content(); ?>
<div class="etc"><span id="link"><?php _e('@'); ?><?php date_default_timezone_set("Asia/Shanghai"); $this->date('h:i:s A'); ?></a></span>
<span id="tags"><?php _e(' #'); ?><?php $this->tags(' #', true,' 无标签'); ?></span>
<span id="link"><?php $this->theNext('▲%s'); ?></span>
<span id="link"><?php $this->thePrev('▼%s'); ?></span></div>


				</div>

    </div>
<!-- end #content-->
	<?php $this->need('footer.php'); ?>
