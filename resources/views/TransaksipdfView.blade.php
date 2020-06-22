<!DOCTYPE html>
<html>
<head>
	<title>Donatur PDF</title>
	<style type="text/css">
		table{
			width: 100%;
			border:1px solid black;
		}
		td, th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<h2>Load PDF File</h2>

<table class="table table-borderless">
<thead> 
<tr>
							
                            <th>Tanggal Transaksi</th>
                            <th>Nominal Donasi</th>
                            <th>Keterangan Donasi</th>
                            <th>Donatur</th>
                            <th>Kategori Donasi</th>
                            <th>Bank</th> 
                            
                        </tr> 

                </thead>
<tbody>
@foreach($transaksi_donasi as $t)
<tr>
    <td>{{ $t->tanggal_transaksi }}</td>
    <td>{{$t->nominal_donasi}}</td>
    <td>{{ $t->keterangan_donasi }}</td> 
    <td>{{ $t->nama_donatur }}</td> 
    <td>{{ $t->nama_kategori }}</td> 
    <td>{{ $t->nama_bank }}</td> 
    @endforeach
</table>
</body>
</html>
