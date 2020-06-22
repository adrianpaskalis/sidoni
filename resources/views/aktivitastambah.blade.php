<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SIDONI PETERPAN</title>
    </head>
	<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                  DASHBOARD DATA AKTIIVITAS - <strong>TAMBAH DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/aktivitas" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
	
	
 
	<form action="/aktivitas/store" method="post">
		{{ csrf_field() }}
		

        <div class="form-group">
                            <label>ID Trans</label> 
                        
                        
                                 <select class="form-control"  name="id_trans ">
                                   @foreach($transaksi as $t)
                                <option value="{{$t->id_transaksi}}">{{$t->id_transaksi}}</option>
                                 @endforeach
                                </select>
                            
                            @if($errors->has('id_trans'))
                                <div class="text-danger">
                                    {{ $errors->first('id_trans')}}
                                </div>
                            @endif
 
                        </div>


		<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_aktivitas" class="form-control" placeholder="Nama Aktivitas ..">
 
                            @if($errors->has('nama_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_aktivitas')}}
                                </div>
                            @endif
 
                        </div>
		
		<div class="form-group">
                            <label>Renacana Tanggal</label>
                            <input type="date" name="tgl_rencana" class="form-control" placeholder="Tanggal Rencana Aktivitas..">
 
                            @if($errors->has('tgl_rencana'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_rencana')}}
                                </div>
                            @endif
 
        </div>


		<div class="form-group">
                            <label>Realisasi Tanggal</label>
                            <input type="date" name="tgl_realisasi" class="form-control" placeholder="Tanggal Realisasi Aktivitas..">
 
                            @if($errors->has('tgl_realisasi'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_realisasi')}}
                                </div>
                            @endif
 
        </div>

		<div class="form-group">
                            <label>Jenis Aktivitas</label>
                            <textarea name="jenis_aktivitas" class="form-control" placeholder="Jenis Aktivitas .."></textarea>
 
                             @if($errors->has('jenis_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_aktivitas')}}
                                </div>
         @endif 
		 </div>
		
		
		 <div class="form-group">
                            <label>Rencana Donasi</label>
                            <input type="number" name="rencana_donasi" class="form-control" placeholder="Rencana Donasi..">
 
                            @if($errors->has('rencana_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('rencana_donasi')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Realisasi Donasi</label>
                            <input type="number" name="realisasi_donasi" class="form-control" placeholder="Rencana Donasi..">
 
                            @if($errors->has('realisasi_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('realisasi_donasi')}}
                                </div>
                            @endif
 
                        </div>
                     
						
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>












