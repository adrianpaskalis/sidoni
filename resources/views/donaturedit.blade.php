<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SIDONI PETERPAN</title>
    </head>
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
	<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                  DASHBOARD DATA DONATUR - <strong>EDIT DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/donatur" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
 
	@foreach($donatur as $d)

	<form action="/donatur/update/{{ $d->id_donatur}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<!-- <input type="hidden" name="id" value="{{ $d->id_donatur }}"> <br/> -->
      
		<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Donatur .." value=" {{ $d->nama_donatur }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
                        
			<div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" required="required" value="{{ $d->tgl_lahir_donatur }}">
 
                            @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
 
             </div>

		<div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="gender" required="required" value="{{ $d->jenis_kelamin_donatur }}">
 
                            @if($errors->has('gender'))
                                <div class="text-danger">
                                    {{ $errors->first('gender')}}
                                </div>
                            @endif
 
                        </div>


		<div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" required="required">{{ $d->alamat_donatur }}</textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif 
		 </div>

		 <div class="form-group">
                            <label>WhatsApp Number</label>
                            <input type="number" name="WA" required="required" value="{{$d->WA_donatur}}">
 
                            @if($errors->has('WA'))
                                <div class="text-danger">
                                    {{ $errors->first('WA')}}
                                </div>
                            @endif
 
                        </div>
		

						<div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" required="required" value="{{$d->Email_donatur}}">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>

						<div class="form-group">
                            <label>Nomor Rekening Donatur</label>
                            <input type="number" name="rekening" required="required" value="{{$d->no_rekening_donatur}}"placeholder="Nomor Rekening donatur ..">
 
                            @if($errors->has('rekening'))
                                <div class="text-danger">
                                    {{ $errors->first('rekening')}}
                                </div>
                            @endif
 
                        </div>

						<div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                        
	</form>
	@endforeach
		

</body>
</html>
