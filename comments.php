<div id="comments">
<h3>小纸条</h3>
<hr/>
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
			<h4>墙上<?php $this->commentsNum(_t('空空如也'), _t('有<span style="color:#ef7c7c;"> 1 </span>张小纸条'), _t('已有<span style="color:#ef7c7c;"> %d </span>张小纸条')); ?>啦。๑乛◡乛๑</h4>
            
            <?php $comments->pageNav(); ?>
            
            <?php $comments->listComments(); ?>
            
            <?php endif; ?>

            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            
			<h4 id="response"><?php _e('张贴小纸条'); ?> &raquo;</h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
				<p>亲爱的<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>。<a href="<?php $this->options->logoutUrl(); ?>" title="登出"><?php _e('登出'); ?></a></p>
                <?php else: ?>
				<p>
					<input type="text" name="author" id="author" placeholder="昵称（必需）" class="text" size="15" value="<?php $this->remember('author'); ?>" />
				</p>
	<p>
<input type="email" name="mail" id="mail" placeholder="邮箱（必需）" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
				<p>
					<input type="text" name="url" id="url" placeholder="主页（非必需）" class="text" size="15" value="<?php $this->remember('url'); ?>" />
				</p>
                <?php endif; ?>
				<p><textarea rows="5" cols="50" name="text" class="textarea" placeholder="我喝完，你随意。"><?php $this->remember('text'); ?></textarea></p>
				<p><input type="submit" value="<?php _e('贴上去'); ?>" class="submit" /></p>
			</form>
            </div>
            <?php else: ?>
            <h4><?php _e('留言已关闭'); ?></h4>
            <?php endif; ?>
		</div>