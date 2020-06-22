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
                               
                                
                                 <select class="form-control"  name="nama_donatur_trans ">
                                @foreach($donatur as $d)
                                <option value="{{$d->id_donatur}}">{{$d->nama_donatur}}</option>
                                 @endforeach
                                </select>
                                                
                                        </select>
                                         @if($errors->has('nama_donatur_trans'))
                                           <div class="text-danger">
                                              {{ $errors->first('nama_donatur_trans')}}
                                                    </div>
                                                @endif
                                </div>   
                                        


                            
                        <div class="form-group">
                            <label>Kategori Donasi </label>
                            <select class="form-control"  name="nama_kategori_donasi ">
                                @foreach($kategori as $k)
                                <option value="{{$k->id_kategori_donasi}}">{{$k->nama_kategori}}</option>
                                 @endforeach
                                </select>


                            @if($errors->has('nama_kategori_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kategori_donasi')}}
                                </div>
                            @endif
                        </div>  

                        <div class="form-group">
                        <label>Bank Tujuan </label>
                            

                                
                                 <select class="form-control"  name="bank_tujuan ">
                                @foreach($bank as $b)
                                <option value="{{$b->id_bank}}">{{$b->nama_bank}}</option>
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
                            <textarea name="keterangan_donasi" class="form-control" placeholder="Keterangan Donasi Transaksi ..">
 
                            @if($errors->has('keterangan_donasi'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_donasi')}}
                                </div>
                            @endif 
 
                        </div>  

                       


                        


            
	
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>












