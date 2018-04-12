<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post">
			<div class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
			<p class="entry_data">
								<?php _e(' '); ?><?php  date_default_timezone_set("Asia/Shanghai"); $this->date('D, M jS, Y'); ?></p>
				
			
			<?php $this->content(); ?>
				</div>
<div class="etc">
<span id="next"> <?php $this->theNext('%s',null, array('title' => '<span class="next">
                        <img src="//file.upstairs.cn/icon/prev.png"></span>', 'tagClass' => 'next-content')); ?></span>
<span class="tags">
<p><?php _e(' #'); ?><?php $this->tags(' #', true,' 无标签'); ?></p>
<p><?php _e('@'); ?><?php date_default_timezone_set("Asia/Shanghai"); $this->date('h:i:s A'); ?></p></span>


<span id="prev"><?php $this->thePrev('%s', null, array('title' => '<span class="prev"><img src="//file.upstairs.cn/icon/next.png"></span>', 'tagClass' => 'prev-content')); ?></span>

</div>
    </div>
<!-- end #content-->

	<?php $this->need('footer.php'); ?>
