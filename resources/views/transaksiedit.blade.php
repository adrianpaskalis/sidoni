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
                  DASHBOARD DATA TRANSAKSI - <strong>EDIT DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/transaksi" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
 
	@foreach($transaksi as $t)
	<form action="/transaksi/update/{{ $t->id_transaksi}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	

		<div class="form-group">
                            <label>Nama Donatur</label>
                            <input type="text" name="nama_donatur_trans" class="form-control" placeholder="Nama Donatur .." value=" {{ $t->nama_donatur }}">
 
                            @if($errors->has('nama_donatur_trans'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_donatur_trans')}}
                                </div>
                            @endif
                        </div>



                        <div class="form-group">
                            <label>Kategori Donasi </label>
                            <input type="text" name="nama_kategori_donasi" class="form-control" placeholder="Kategori Donasi .." value=" {{ $t->nama_kategori }}">
 
                            @if($errors->has('nama_kategori_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kategori_donasi')}}
                                </div>
                            @endif
                        </div>
                        

                        
		<div class="form-group">
                            <label>Bank</label>
                            <input type="text" name="bank_tujuan" 
                            placeholder="Nama Bank Tujuan" required="required" value="{{ $t->nama_bank }}">
 
                            @if($errors->has('bank_tujuan'))
                                <div class="text-danger">
                                    {{ $errors->first('bank_tujuan')}}
                                </div>
                            @endif
 
                        </div>
                      

		<div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="date" name="tanggal_transaksi"required="required" value="{{ $t->tanggal_transaksi }}">
 
                             @if($errors->has('tanggal_transaksi'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_transaksi')}}
                                </div>
         @endif 
		 </div> 
         

		 <div class="form-group">
                            <label>Nominal Donasi</label>
                            <input type="number" name="nominal_donasi" required="required" value="{{$t->nominal_donasi}}">
 
                            @if($errors->has('nominal_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('nominal_donasi')}}
                                </div>
                            @endif
 
                        </div>
                        

						<div class="form-group">
                            <label>Keterangan Donasi  </label>
                            <input type="text" name="keterangan_donasi" required="required" value="{{$t->keterangan_donasi}}">
 
                            @if($errors->has('keterangan_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('emaketerangan_donasiil')}}
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
