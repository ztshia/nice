<?php
/**
 * 2016.10.15 a new theme
 * 
 * @package Lartist 
 * @author Kioto
 * @version 0.1beta
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
