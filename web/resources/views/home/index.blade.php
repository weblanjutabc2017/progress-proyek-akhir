
@include('layout.head')	
	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li class="fh5co-active"><a href="{{ url('home')}}"><span>Home</span></a></li>
						<li><a href="{{ url('penduduk')}}"><span>Data Penduduk</span></a></li>
						<!--<li><a href="{{ url('kelahiran')}}"><span>Data Kelahiran</span></a></li>-->
						<li><a href="{{ url('kematian')}}"><span>Data Kematian</span></a></li>
						<li><a href="{{ url('login')}}"><span>Login</span></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(https://infoindonesia.files.wordpress.com/2014/05/peta-indonesia-bagus-besar.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center"><span>selamat datang</span></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		

	</div> <!-- END fh5co-wrap -->


	@include('layout.footer')