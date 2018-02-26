<?php
/**
* 实验室
*
* @package custom
*/
?>

	<?php $this->need('header.php'); ?>
	<ul id="lab">
<h3>便利贴</h3>
<hr/>
<li id="photo"><a target="_blank" href="https://note.upstairs.cn">手记便笺</a></li>
<li id="photo"><a target="_blank" href="https://cloud.upstairs.cn/">云存储</a></li>
<li id="photo"><a target="_blank" href="https://bookmark.upstairs.cn/">书签</a></li>
<li id="photo"><a target="_blank" href="https://reader.upstairs.cn/">阅读器</a></li>
<li id="photo"><a target="_blank" href="https://music.upstairs.cn/">音乐盒</a></li>
<li id="photo"><a target="_blank" href="https://io.upstairs.cn/">学习笔记</a></li>
<li id="photo"><a target="_blank" href="https://docs.upstairs.cn/">知识文档</a></li>
<li id="photo"><a target="_blank" href="https://memo.enoshima.cn/">备忘录</a></li>
<li id="photo"><a target="_blank" href="/tweets">Twitter存档</a></li>
<li id="photo"><a target="_blank" href="https://zhuanlan.zhihu.com/tomorrow">知乎专栏</a></li>
</ul>

	<ul id="links">
<h3>友邻们</h3>
<hr/>
<li id="ulin"><a target="_blank" href="https://enoshima.cn/">＠皮蛋同学</a></li>
<li id="ulin"><a target="_blank" href="http://ye-lling.blogbus.com/">＠陳喜發</a></li>
<li id="ulin"><a target="_blank" href="https://dylens.wordpress.com/">＠Dylen</a></li>
<li id="ulin"><a target="_blank" href="https://panlilu.com/">＠Panlilu</a></li>
<li id="ulin"><a target="_blank" href="https://moeka.me/blog/">＠ljsabc</a></li>
<li id="ulin"><a target="_blank" href="https://imnerd.org//">＠怡红公子</a></li>
<li id="ulin"><a target="_blank" href="https://erl.im/">＠Erl</a></li>
<li id="ulin"><a target="_blank" href="https://luolei.org/">＠罗磊</a></li>
<li id="ulin"><a target="_blank" href="https://yang.style/">＠杨左</a></li>
<li id="ulin"><a target="_blank" href="http://chan.ge/">＠hackergene</a></li>
<li id="ulin"><a target="_blank" href="https://minemine.cc/">＠Yilin</a></li>
<li id="ulin"><a target="_blank" href="https://taifua.com/">＠太傅</a></li>
</ul>

<?php $this->need('comments.php'); ?>
<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=100')->to($tags); ?>
<ul class="tags-list">
<h3>标签树</h3>
<hr/>
<?php while($tags->next()): ?>
    <li><a style="background-color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>
<?php endwhile; ?>
</ul>


	<?php $this->need('footer.php'); ?>
	
	