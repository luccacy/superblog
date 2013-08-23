<header class="top">
			<div class="wrap">				
				<nav>
					<ul>
						<li class="logo">
							<a href="test">Anchor CMS</a>
						</li>
						<?php $menu = array('posts', 'comments', 'pages', /*'menu',*/ 'categories', 'users', 'extend'); ?>
						<?php foreach($menu as $url): ?>
								<?php echo $url; ?>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>
</header>
