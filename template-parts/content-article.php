<article class="content px-3 py-5 p-md-5">
			<div class="container">
				<header class="content-header">
					<div class="meta mb-3">
                        <span class="date"><?php the_date() ?></span>
                        <?php
                        
                        the_tags( "<span class='tag'><i class='fa fa-tag'></i>", "</span><span class='tag'><i class='fa fa-tag'></i>", "</span>" )

                        ?>
                        <span class="tag"><i class='fa fa-tag'></i> category</span>
                        <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number() ?></a></span></div>
				</header>

                <?php

                the_content()

                ?>

                <?php

                comments_template()

                ?>

				<div class="content-body">
					<figure class="blog-banner">
						<a href="#"><img class="img-fluid" src="images/blog-post-banner.jpg" alt="image"></a>
						<figcaption class="mt-2 text-center image-caption">Image Credit: <a href="#" target="_blank">URL
								Here</a></figcaption>
					</figure>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
						quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
						rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
						Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
						tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>


					<h3 class="mt-5 mb-3">Typography</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus.</p>
					<h5 class="my-3">Bullet Points:</h5>
					<ul class="mb-5">
						<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
						<li class="mb-2">Aenean commodo ligula eget dolor.</li>
						<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
					</ul>
					<ol class="mb-5">
						<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
						<li class="mb-2">Aenean commodo ligula eget dolor.</li>
						<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
					</ol>
					<h5 class="my-3">Quote Example:</h5>
					<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
						<p class="mb-2">You might not think that programmers are artists, but programming is an
							extremely creative profession. It's logic-based creativity.</p>
						<footer class="blockquote-footer">John Romero</footer>
					</blockquote>

					<h5 class="my-3">Table Example:</h5>
					<table class="table table-striped my-5">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>


					<h3 class="mt-5 mb-3">Video Example</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
						quis enim. </p>

					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/SPFDLHNm5KQ" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>

				</div>

				<nav class="blog-nav nav nav-justified my-5">
					<a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i
							class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
					<a class="nav-link-next nav-item nav-link rounded-right" href="page.html">Next<i
							class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				<hr>

			</div>
			<!--//container-->
		</article>