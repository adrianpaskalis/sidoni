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
<h1>Laporan Pemasukan </h1>
<table id="table" class="table" ref="content">
    <tr>
       
         <th>Kategori Donasi</th>
         <th>Tanggal Transaksi</th>
         <th>Nominal Donasi</th>
         <th>Jumlah Dana</th>
         
         
    </tr>
    
       @foreach ($transaksi as $t)
        <tr>
            
            <td>{{$t->kategori_donasi}}</td>
            <td>{{$t->tanggal_transaksi}}</td>
            <td>{{$t->nominal_donasi}}</td>
            
        </tr>
    
      @endforeach
      
     <tr>
         <td colspan="5"> Total Pemasukan</td>
         <td>@currency($total_donasi->total)</td>
     </tr>
  </table>
