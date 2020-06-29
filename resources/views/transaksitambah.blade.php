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
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                  DASHBOARD DATA TRANSAKSI DONASI - <strong>TAMBAH DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/transaksi" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
	                      
	
 
	<form action="/transaksi/store" method="post">
		{{ csrf_field() }}
		
		<div class="form-group"> 

                            <label>Donatur </label>
                               
                                
                                 <select class="form-control"  name="nama_donatur">
                                @foreach($donatur as $d)
                                <option value="{{$d->nama_donatur}}">{{$d->nama_donatur}}</option>
                                 @endforeach
                                </select>
                                                
                                        </select>
                                         @if($errors->has('nama_donatur'))
                                           <div class="text-danger">
                                              {{ $errors->first('nama_donatur')}}
                                                    </div>
                                                @endif
                                </div>   
                                        


                            
                        <div class="form-group">
                            <label>Kategori Donasi </label>
                            <select class="form-control"  name="nama_kategori">
                                @foreach($kategori as $k)
                                <option value="{{$k->nama_kategori}}">{{$k->nama_kategori}}</option>
                                 @endforeach
                                </select>


                            @if($errors->has('nama_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kategori')}}
                                </div>
                            @endif
                        </div>  

                        <div class="form-group">
                        <label>Bank Tujuan </label>
                            

                                
                                 <select class="form-control"  name="bank_tujuan">
                                @foreach($bank as $b)
                                <option value="{{$b->nama_bank}}">{{$b->nama_bank}}</option>
                                 @endforeach
                                </select>
                               
                            </select>
                            @if($errors->has('bank_tujuan'))
                                <div class="text-danger">
                                    {{ $errors->first('bank_tujuan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                        <label>Aktivitas Tujuan Donasi </label>

                         <select class="form-control"  name="nama_aktivitas">
                                @foreach($aktvitas as $a)
                                <option value="{{$a->nama_aktivitas}}">{{$a->nama_aktivitas}}</option>
                                 @endforeach
                                </select>
                               
                            </select>
                            @if($errors->has('nama_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_aktivitas')}}
                                </div>
                            @endif
                        </div>  



                                
                        <div class="form-group">

                        <label>Tanggal Transaksi</label>
                            <input type="date" name="tanggal_transaksi" class="form-control" placeholder="Tanggal Transaksi ..">
 
                            @if($errors->has('tanggal_transaksi'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_transaksi')}}
                                </div>
                            @endif
 
                        </div>
        
                        <div class="form-group">
                            <label>Nominal Donasi</label>
                            <input type="Number" name="nominal_donasi" class="form-control" placeholder="Nominal Donasi Transaksi ..">
 
                            @if($errors->has('nominal_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('nominal_donasi')}}
                                </div>
                            @endif 
 
                        </div>
                        

                        <div class="form-group">
                            <label>Keterangan Donasi</label>
                            <input type="text" name="keterangan_donasi" class="form-control" placeholder="Keterangan Donasi Transaksi ..">
 
                            @if($errors->has('keterangan_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_donasi')}}
                                </div>
                            @endif 
                         </div>

                         <div>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
	
	                   
	</form>
</body>
</html>












