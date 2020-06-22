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
                   Dashboard Data Aktivitas - 
                </div>
				<div class="card-body">
                    <a href="/aktivitas/tambah" class="btn btn-primary">Tambah Aktivitas Baru</a>
                    <br/>
                    <br/>  

					<div class="card-body">
					<a href="{{action('AktivitasController@downloadPDF')}}" class="btn btn-primary">Download PDF</a></td>
                    <br/>
                    <br/> 

					<p>Cari Data Aktivitas :</p>
			<form action="/Aktivitas/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Aktivitas .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
									
									<th>id_trans </th>
									<th>Nama Aktivitas </th> 
									<th>Rencana Tanggal  </th>
									<th>Realisasi Tanggal</th>
									<th>Jenis Aktivitas</th>
									<th>Rencana Donasi</th>
									<th>Realisasi Donasi</th>
									<th>Action</th>
									
								</tr> 

						</thead>
        <tbody>
		@foreach($aktivitas as $a)
		<tr> 
			<td>{{ $a->id_trans }}</td>
			<td>{{ $a->nama_aktivitas }}</td>
			<td>{{ $a->rencana_tanggal }}</td>
			<td>{{ $a->realisasi_tanggal }}</td>
			<td>{{ $a->jenis_aktivitas }}</td>
            <td>{{ $a->rencan_donasi }}</td>
            <td>{{ $a->realisasi_donasi }}</td>
     

            
			<td>
				<a href="/aktivitas/edit/{{ $a->id_aktivitas }}"  class="btn btn-warning">Edit</a>
				|
				<a href="/aktivitas/delete/{{ $a->id_aktivitas }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $aktivitas->currentPage() }} <br/>
	Jumlah Data : {{ $aktivitas->total() }} <br/>
	</br>
	{{ $aktivitas->links()}}
</body>
</html>
