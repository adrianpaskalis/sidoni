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
                            <a class="nav-link js-scroll-trigger" href="chart">Lihat Laporan</a></li>
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
                   Dashboard Data Transaksi Donasi - 
                </div>
				<div class="card-body">
                    <a href="/transaksi/tambah" class="btn btn-primary">Tambah Transaksi Baru</a>
                    <br/>
                    <br/> 

					<div class="card-body">
					<a href="{{action('TransaksiController@downloadPDF')}}" class="btn btn-primary">Download PDF</a></td>
                    <br/>
                    <br/> 


					<p>Cari Data Donatur :</p>
			<form action="/transaksi/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Donatur .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
							
									<th>Tanggal Transaksi</th>
									<th>Nominal Donasi</th>
									<th>Keterangan Donasi</th>
									<th>Donatur</th>
                                    <th>Kategori Donasi</th>
                                    <th>Bank</th> 
									<th>Action</th>
								</tr> 

						</thead>
        <tbody>
		@foreach($transaksi_donasi as $t)
		<tr>
			<td>{{ $t->tanggal_transaksi }}</td>
			<td>{{$t->nominal_donasi}}</td>
			<td>{{ $t->keterangan_donasi }}</td> 
			<td>{{ $t->nama_donatur_trans }}</td> 
			<td>{{ $t->nama_kategori_trans }}</td> 
			<td>{{ $t->nama_bank_trans }}</td> 
			
           

            
			<td>
				<a href="/transaksi/edit/{{ $t->id_transaksi}}"  class="btn btn-warning">Edit</a>
				|
				<a href="/transaksi/delete/{{ $t->id_transaksi }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $transaksi_donasi->currentPage() }} <br/>
	Jumlah Data : {{ $transaksi_donasi->total() }} <br/>
	</br>
	{{ $transaksi_donasi->links()}}
</body>
</html>
