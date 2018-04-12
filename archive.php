<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <div class="post">
			<div class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
			<p class="entry_data">
							<span><?php _e(' '); ?><?php $this->date('D, M jS, Y'); ?></span>

								
			</p>
			<?php $this->content('〖阅读全文〗'); ?>
		</div>
	<?php endwhile; ?>
    <?php else: ?>
        <div class="post">
            <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>

        <ol class="pages clearfix">
            <?php $this->pageNav(); ?>
        </ol>
    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
