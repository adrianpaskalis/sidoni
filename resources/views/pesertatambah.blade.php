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
                  DASHBOARD DATA PESERTA - <strong>TAMBAH DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/peserta" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
	
	
 
	<form action="/peserta/store" method="post">
		{{ csrf_field() }}
		
		<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta ..">
 
                            @if($errors->has('nama_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_peserta')}}
                                </div>
                            @endif
 
                        </div>
                            <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_peserta" class="form-control" placeholder="Tanggal Lahir Peserta ..">
 
                            @if($errors->has('tgl_lahir_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir_peserta')}}
                                </div>
                            @endif
 
        </div>


		            <div class="form-group">
                                        <label>Gender</label>
                                        <input type="text" name="gender_peserta" class="form-control" placeholder="Gender Peserta ..">
 
                                        @if($errors->has('gender_peserta'))
                                            <div class="text-danger">
                                                {{ $errors->first('gender_peserta')}}
                                            </div>
                                        @endif
 
                                    </div>

		            <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat_peserta" class="form-control" placeholder="Alamat peserta .."></textarea>
 
                                         @if($errors->has('alamat_peserta'))
                                            <div class="text-danger">
                                                {{ $errors->first('alamat_peserta')}}
                                            </div>
                     @endif 
		             </div>
		
		
		             <div class="form-group">
                                        <label>WhatsApp Number</label>
                                        <input type="number" name="WA_peserta" class="form-control" placeholder="Nomor Whatsapp Anda">
 
                                        @if($errors->has('WA_peserta'))
                                            <div class="text-danger">
                                                {{ $errors->first('WA_peserta')}}
                                            </div>
                                        @endif
 
                                    </div>

                                    
		             <div class="form-group">
                                        <label>ID Aktivitas</label>
                                       <select class="form-control"  name="id_aktivitas">
                                            @foreach($aktivitas as $a)
                                            <option value="{{$a->id_aktivitas}}">{{$a->id_aktivitas}}</option>
                                             @endforeach
                                            </select>
                                        @if($errors->has('id_aktivitas'))
                                            <div class="text-danger">
                                                {{ $errors->first('id_aktivitas')}}
                                            </div>
                                        @endif
 
                                    </div>

                                   
                        <div class="form-group">
                          <label>Nama Aktivitas</label>
                            <select class="form-control"  name="nama_aktivitas">
                                @foreach($aktivitas as $a)
                                <option value="{{$a->id_aktivitas}}">{{$a->nama_aktivitas}}</option>
                                 @endforeach
                                </select>
 
                            @if($errors->has('nama_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_aktivitas')}}
                                </div>
                            @endif
 
                        </div>
                         </div>
                            <div class="form-group">
                            <label>Tanggal Aktivitas<</label>
                            <input type="date" name="tanggal_aktivitas" class="form-control" placeholder="Tanggal Aktivitas ..">
 
                            @if($errors->has('tanggal_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_aktivitas')}}
                                </div>
                            @endif
 
        </div>
                     
                        
                     
                        
 	<div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
	</form>
 
</body>
</html>












