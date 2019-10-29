
@include('layout.head')	
	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li ><a href="{{ url('home')}}"><span>Home</span></a></li>
						<li ><a href="{{ url('penduduk')}}"><span>Data Penduduk</span></a></li>
						<!--<li ><a href="{{ url('kelahiran')}}"><span>Data Kelahiran</span></a></li>-->
						<li ><a href="{{ url('kematian')}}"><span>Data Kematian</span></a></li>
						<li class="fh5co-active"><a href="{{ url('login')}}"><span>Login</span></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(https://amangudan.com/wp-content/uploads/2017/09/Pengertian-Kependudukan.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							
							<input type="email" name="email" value="Email">
							<h1></h1>
							<input type="username" name="username" value="Username">
							<h1></h1>
							
							<input type="submit" value="Login">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		

	</div> <!-- END fh5co-wrap -->


	@include('layout.footer')