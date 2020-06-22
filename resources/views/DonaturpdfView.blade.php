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
<tr>
							
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>WhatsApp</th>
                            <th>Email </th>
                            <th>No Rekening Donatur</th>
                        </tr> 
                        @foreach($donatur as $d)
		<tr>
			<td>{{ $d->nama_donatur }}</td>
			<td>{{ $d->tgl_lahir_donatur }}</td>
			<td>{{ $d->jenis_kelamin_donatur }}</td>
			<td>{{ $d->alamat_donatur }}</td>
            <td>{{ $d->WA_donatur }}</td>
            <td>{{ $d->Email_donatur }}</td>
            <td>{{ $d->no_rekening_donatur }}</td>
        </tr> 
        @endforeach
</table>
</body>
</html>
