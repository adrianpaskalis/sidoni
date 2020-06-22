<!DOCTYPE html>
<html>
<head>
	<title>Donatur PDF</title>
	<style>
    #table {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #table td, #table th {
      border: 1px solid #000000;
      padding: 8px;
    }
    
    #table tr:nth-child(even){background-color: #f2f2f2;}
    
    #table tr:hover {background-color: #ddd;}
    
    #table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #00BFFF;
      color: white;
    }
    </style>
</head>
<body>

<h2>Load PDF File</h2>

<table class="table table-borderless">
<thead>
                            <tr>
									
									<th>id_trans </th>
									<th>Nama Aktivitas </th> 
									<th>Rencana Tanggal  </th>
									<th>Realisasi Tanggal</th>
									<th>Jenis Aktivitas</th>
									<th>Rencana Donasi</th>
									<th>Realisasi Donasi</th>
						
									
								</tr> 

						</thead>
        <tbody>
		@foreach($aktivitas as $a)
		<tr> 
			<td>{{ $a->id_trans }}</td>
			<td>{{ $a->nama_aktivitas }}</td>
			<td>{{ $a->rencana_tanggal }}</td>
			<td>{{ $a->realisasi_tanggal }}</td>
			<td>{{ $a->jenis_aktivitas }}</td>
            <td>{{ $a->rencan_donasi }}</td>
            <td>{{ $a->realisasi_donasi }}</td>
        @endforeach
</table>
</body>
</html>
