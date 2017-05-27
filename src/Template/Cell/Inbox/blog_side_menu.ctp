<div class="widget">
	<h3 class="widget-title">Recent post</h3>
	<div class="recent-post">
		<ul>
		<?php foreach($recentBlog as $blog){ ?>
			<li><a href="<?php echo $this->Url->build(['controller' => 'blogs','action' => 'blog_view','blog_view' => $blog->title]); ?>"><?php echo $blog->title; ?></a></li>
		<?php } ?>
		</ul>
	</div>
</div>
<div class="widget">
	<h3 class="widget-title">Categories</h3>
	<div class="post-list categories">
		<ul>
		<?php foreach($blogCategory as $slug => $name){ ?>
			<li><a href="<?php echo $this->Url->build(['controller' => 'blogs','action' => 'blog_view','blog_view' => $slug]); ?>"><?php echo $name; ?></a></li>
		<?php } ?>
		</ul>
	</div>
</div>