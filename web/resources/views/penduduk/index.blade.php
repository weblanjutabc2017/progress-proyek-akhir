
@include('layout.head')	
	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li ><a href="{{ url('home')}}"><span>Home</span></a></li>
						<li class="fh5co-active"><a href="{{ url('penduduk')}}"><span>Data Penduduk</span></a></li>
						<!--<li ><a href="{{ url('kelahiran')}}"><span>Data Kelahiran</span></a></li>-->
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
							<h1 class="text-center">LOADING........</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<ul class="nav nav-tabs col-md-offset-1">
            <li class="active">
                <a href="#rt01" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                    <span class="hidden-xs">RT 01</span>
                </a>
            </li>
            <li class="">
				<a href="#rt02" data-toggle="tab" aria-expanded="true">
                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                    <span class="hidden-xs">RT 02</span>
                </a>
            </li>
            <li class="">
				<a href="#rt03" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                    <span class="hidden-xs">RT 03</span>
                </a>
            </li>
            <li class="">
				<a href="#rt04" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                    <span class="hidden-xs">RT 04</span>
                </a>
            </li>
			<li class="">
				<a href="#rt05" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                    <span class="hidden-xs">RT 05</span>
                </a>
            </li>
        </ul>
        
		<div class="tab-content">
            <div class="tab-pane active col-md-offset-1" id="rt01"><br>
				<div class="m-b-20 table-responsive">
                    <p>Ini adalah tampilan dari semua pendudukyang ada di RT 01</p>
						<table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Tempat/Tanggal lahir</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
								<th>Status</th>
                                <th>Agama</th>
								<th>Pekerjaan</th>
                            </tr>
                            </thead>


							<tbody>
										
							</tbody>
						</table>
				</div>	
            </div>
			
            <div class="tab-pane col-md-offset-1" id="rt02"><br>
                <div class="m-b-20 table-responsive">
                    <p>Ini adalah tampilan dari semua penduduk yang ada di RT 02</p>
						<table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Tempat/Tanggal lahir</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
								<th>Status</th>
                                <th>Agama</th>
								<th>Pekerjaan</th>
                            </tr>
                            </thead>


							<tbody>
										
							</tbody>
						</table>
				</div>	
            </div>
            <div class="tab-pane col-md-offset-1" id="rt03">
                <div class="m-b-20 table-responsive">
                    <p>Ini adalah tampilan dari semua penduduk yang ada di RT 03</p>
						<table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Tempat/Tanggal lahir</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
								<th>Status</th>
                                <th>Agama</th>
								<th>Pekerjaan</th>
                            </tr>
                            </thead>


							<tbody>
										
							</tbody>
						</table>
				</div>	
			</div>
            <div class="tab-pane col-md-offset-1" id="rt04">
                <div class="m-b-20 table-responsive">
                    <p>Ini adalah tampilan dari semua penduduk yang ada di RT 04</p>
						<table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Tempat/Tanggal lahir</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
								<th>Status</th>
                                <th>Agama</th>
								<th>Pekerjaan</th>
                            </tr>
                            </thead>


							<tbody>
										
							</tbody>
						</table>
				</div>	
            </div>
			<div class="tab-pane col-md-offset-1" id="rt05">
                <div class="m-b-20 table-responsive">
                    <p>Ini adalah tampilan dari semua penduduk yang ada di RT 05</p>
						<table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Tempat/Tanggal lahir</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
								<th>Status</th>
                                <th>Agama</th>
								<th>Pekerjaan</th>
                            </tr>
                            </thead>


							<tbody>
										
							</tbody>
						</table>
				</div>	
			</div>	
        </div>
		
	</div>


	@include('layout.footer')