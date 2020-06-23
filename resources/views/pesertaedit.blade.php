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
                  DASHBOARD DATA DONATUR - <strong>EDIT DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/peserta" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
 
	@foreach($peserta as $p)
	<form action="/peserta/update/{{ $p->id_peserta}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}


		<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_peserta" class="form-control" placeholder="Nama peserta .." value=" {{ $p->nama_peserta }}">
 
                            @if($errors->has('nama_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_peserta')}}
                                </div>
                            @endif
 
       </div>
               
			<div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_peserta" required="required" value="{{ $p->tgl_lahir_peserta }}">
 
                            @if($errors->has('tgl_lahir_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir_peserta')}}
                                </div>
                            @endif
 
        </div>

		<div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="gender_peserta" required="required" value="{{ $p->jenis_kelamin_peserta }}">
 
                            @if($errors->has('gender_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('gender_peserta')}}
                                </div>
                            @endif
 
                        </div>


		<div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat_peserta" required="required">{{ $p->alamat_peserta }}</textarea>
 
                             @if($errors->has('alamat_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat_peserta')}}
                                </div>
                             @endif 
		 </div>

		 <div class="form-group">
                            <label>WhatsApp Number</label>
                            <input type="number" name="WA_peserta" required="required" value="{{$p->WA_peserta}}">
 
                            @if($errors->has('WA_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('WA_peserta')}}
                                </div>
                            @endif
 
                        </div>
		

						<div class="form-group">
                            <label>Email </label>
                            <input type="number" name="id_aktivitas" required="required" value="{{$p->id_aktivitas}}">
 
                            @if($errors->has('id_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('id_aktivitas')}}
                                </div>
                            @endif
 
                        </div>
						<div class="form-group">
                            <label>Nama Aktivitas</label>
                            <input type="text" name="nama_aktivitas" required="required" value="{{$p->nama_aktivitas}}"placeholder="Nama AKtivitas">
 
                            @if($errors->has('nama_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_aktivitas')}}
                                </div>
                            @endif
 
                        </div>

                        	<div class="form-group">
                            <label>Tanggal AKtivitas </label>
                            <input type="date" name="tanggal_aktivitas" required="required" value="{{ $p->tanggal_aktivitas }}">
 
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
	@endforeach
		
 
</body>
</html>
