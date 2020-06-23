<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SIDONI PETERPAN</title>
    </head>
	<body> 

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mb-0 h1" href="homeafter">
        <img src="style/assets/img/Slogo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            SIDONI
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                        <a class="nav-link" href="donatur">Donatur <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="kategori">Kategori Donasi <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="aktivitas">Aktivitas <span class="sr-only">(current)</span></a></li>

                        <li class="nav-item">
                        <a class="nav-link" href="peserta">Peserta <span class="sr-only">(current)</span></a></li>

                        <li class="nav-item">
                        <a class="nav-link" href="transaksi">Transaksi <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#laporan">Lihat Laporan</a></li>
                    </ul>
                </div>
    </nav>

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>	
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Dashboard Data Peserta - 
                </div>
				<div class="card-body">
                    <a href="/peserta/tambah" class="btn btn-primary">Tambah Peserta Baru</a>
                    <br/>
                    <br/> 

					<p>Cari Data Donatur :</p>
			<form action="/peserta/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Donatur .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
							
									<th>Nama Peserta</th>
                                    <th>TTL Peserta</th>
                                    <th>Gender Peserta</th>
                                    <th>Alamat Peserta</th>
                                    <th>WA Peserta</th>
									<th>Nama Aktivitas</th>
									<th>Tanggal Aktivitas</th>
									<th>Action</th>
								</tr> 

						</thead>
        <tbody>
		@foreach($peserta as $p)
		<tr>
			<td>{{ $p->nama_peserta }}</td>
            <td>{{ $p->tgl_lahir_peserta }}</td>
            <td>{{ $p->jenis_kelamin_peserta }}</td>
            <td>{{ $p->alamat_peserta }}</td>
            <td>{{ $p->WA_peserta }}</td>
			<td>{{ $p->nama_aktivitas }}</td>
			<td>{{ $p->tanggal_aktivitas }}</td>
           

            
			<td>
				<a href="/peserta/edit/{{ $p->id_peserta }}"  class="btn btn-warning">Edit</a>
				|
				<a href="/peserta/delete/{{ $p->id_peserta }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $peserta->currentPage() }} <br/>
	Jumlah Data : {{ $peserta->total() }} <br/>
	</br>
	{{ $peserta->links()}}
</body>
</html>
