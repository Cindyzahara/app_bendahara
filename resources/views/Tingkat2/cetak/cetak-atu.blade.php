<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static { 
            position: relative;
            /* left:3%; */
            border: 1px solid #543535;
        }

    </style>
    <title>CETAK DATA TARUNA</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Tingkat XI ATU</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Tanggal </th>
            <th>Nama</th>
            <th>Nominal</th>
            <th>Pembayaran</th>
            <th>Sisa</th>
            <th>Tanggal </th>
            <th>Pembayaran</th>
            <th>Sisa</th>
            <th>Tanggal </th>
            <th>Pembayaran</th>
            <th>Sisa</th>
            <th>Tanggal </th>
            <th>Pembayaran</th>
            <th>Sisa</th>
            <th>Tanggal </th>
            <th>Pembayaran</th>
            <th>Sisa</th>                                  
        </tr>
            @foreach ($cetakT2atu as $item)
            <tr> 
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal1_indo}}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ formatRupiah ($item->nominal) }}</td>
                <td>{{ formatRupiah ($item->pembayaran1) }}</td>
                <td>{{ formatRupiah ($item->sisa1) }}</td>
                <td>{{ $item->tanggal2_indo}}</td>
                <td>{{ formatRupiah ($item->pembayaran2) }}</td>
                <td>{{ formatRupiah ($item->sisa2) }}</td>
                <td>{{ $item->tanggal3_indo}}</td>
                <td>{{ formatRupiah ($item->pembayaran3) }}</td>
                <td>{{ formatRupiah ($item->sisa3) }}</td>
                <td>{{ $item->tanggal4_indo}}</td>
                <td>{{ formatRupiah ($item->pembayaran4) }}</td>
                <td>{{ formatRupiah ($item->sisa4) }}</td>
                <td>{{ $item->tanggal5_indo}}</td>
                <td>{{ formatRupiah ($item->pembayaran5) }}</td>
                <td>{{ formatRupiah ($item->sisa5) }}</td>  
            </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>