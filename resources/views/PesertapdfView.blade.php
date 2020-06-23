<!DOCTYPE html>
<html>
<head>
	<title>Peserta PDF</title>
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

<h2>Peserta PDF File</h2>

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
@foreach($peserta as $p)
<tr>
  	<td>{{ $p->nama_peserta }}</td>
            <td>{{ $p->tgl_lahir_peserta }}</td>
            <td>{{ $p->jenis_kelamin_peserta }}</td>
            <td>{{ $p->alamat_peserta }}</td>
            <td>{{ $p->WA_peserta }}</td>
			<td>{{ $p->nama_aktivitas }}</td>
			<td>{{ $p->tanggal_aktivitas }}</td>
    @endforeach
</table>
</body>
</html>
