
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
				@foreach ($article as $i)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{ asset("img/blog/$i->image") }}" alt="">
							<div class="post-date">
								<h2>{{ $i->jour }}</h2>
								<h3>{{$i->mois }} {{ $i->annee }}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{ $i->titre }}</h2>
							<div class="post-meta">
								<a href="">{{ $i->users->name }}</a>
								<a href="">Design, Inspiration</a>
								@foreach ($article->take(-1) as $e)
								<a href="">{{ $e->id }} Comments</a>
									
								@endforeach
								
							</div>
							<p>{{ $i->texte }}</p>
							<a href="{{ route("blogpost") }}" class="read-more">Read More</a>
						</div>
					</div>
						
				@endforeach
					
					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="#">Vestibulum maximus</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href="">branding</a></li>
							<li><a href="">identity</a></li>
							<li><a href="">video</a></li>
							<li><a href="">design</a></li>
							<li><a href="">inspiration</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">photography</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->
