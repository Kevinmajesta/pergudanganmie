<!DOCTYPE html>
<html>

<head>
    <style>
        #produk {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #produk td,
        #produk th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #produk tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #produk tr:hover {
            background-color: #ddd;
        }

        #produk th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #e41526;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3 align="center">Data Pembayaran</h3>

    <table id="produk">
        <tr>
            <th>Produk</th>
            <th>User</th>
            <th>ID Transaksi</th>
            <th>Jumlah Barang (PAK)</th>
            <th>Total Pembayaran</th>
            <th>Tanggal Pembayaran</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->produk->id_produk }} - {{  $d->produk->namabarang }}</td>
                <td>{{ $d->user->id }} - {{  $d->user->nama }}</td>
                <td>{{ $d->id_transaksi }}</td>
                <td>{{ $d->jumlahbarang }}</td>
                <td>{{ $d->total_bayar }}</td>
                <td>{{ $d->tgl_bayar }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
