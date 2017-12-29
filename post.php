<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
								<?php _e(' '); ?><?php  date_default_timezone_set("Asia/Chongqing"); $this->date('D, M jS, Y'); ?></p>
				
			
			<?php $this->content(); ?>
<div class="etc"><span id="link"><?php _e('@'); ?><?php date_default_timezone_set("Asia/Chongqing"); $this->date('h:i:s A'); ?></a></span>
<span id="tags"><?php _e('#'); ?><?php $this->tags(' #', true, '无标签'); ?></span>
<span id="next"><?php $this->theNext('▲ %s'); ?></span>
<span id="prev"><?php $this->thePrev('▼ %s'); ?></span></div>


				</div>

    </div>

<span class="copyright">©本文未经授权，不得以任何形式转载，违者将追究法律责任。</span>
<span class="wechat"><img src="/new/wechat.png"></span>
<span class="weibo"><a href="http://weibo.com/345900106/" target="_blank"><img src="/new/weibo.png"></a></span>

<!-- end #content-->

	<?php $this->need('footer.php'); ?>
