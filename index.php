<?php
/**
 * 2018.02.18 1.0.0
 * 
 * @package Nice 
 * @author Kioto
 * @version 1.0.0
 * @link https://re.scue.us
 */
 
 $this->need('header.php');
 ?>

    <div class="grid_10" id="content">
	<?php while($this->next()): ?>
        <div class="post">
			<div class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->sticky();$this->title() ?></a></div>
			<p class="entry_data">
							<span><?php _e(' '); ?><?php $this->date('D, M jS, Y'); date_default_timezone_set("Asia/Chongqing");?></span>

								
			</p>
			<?php $this->content('〖阅读全文〗'); ?>
        </div>
	<?php endwhile; ?>

    <?php $this->pageNav(); ?>
    </div><!-- end #content-->
		<?php $this->need('footer.php'); ?>
