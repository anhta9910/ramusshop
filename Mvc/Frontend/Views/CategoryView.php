
					<!-- SAID-BAR START -->
						<div class="side-bar"> 
							<h2><i class="fa fa-align-justify"></i>Sản Phẩm</h2>
							<nav>
								<ul>
									<?php foreach($data as $rows): ?>
									<li><a href="index.php?controller=Product&action=category&id=<?php echo $rows->category_id; ?>"><span><i class="fa fa-apple"></i></span><?php echo $rows->name; ?></a></li>
								<?php endforeach; ?>
								</ul>
							</nav>
						</div>
						<!-- SAID-BAR END -->
