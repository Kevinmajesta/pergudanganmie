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
    <h3 align="center">Data Pengiriman</h3>

    <table id="produk">
        <tr>
            <th>ID Resi</th>
            <th>Supir</th>
            <th>ID Transaksi</th>
            <th>ID Pengiriman </th>
            <th>Kendaraan</th>
            <th>Status Pengiriman</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->ekspedisi->id_resi }}</td>
                <td>{{ $d->supir->id_supir }} - {{ $d->supir->nama }}</td>
                <td>{{ $d->pembayaran->id_transaksi }}</td>
                <td>{{ $d->id_pengiriman }}</td>
                <td>{{ $d->supir->kendaraan }}</td>
                <td>{{ $d->statuspengiriman }}</td>

            </tr>
        @endforeach
    </table>
</body>

</html>
