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
    <h3 align="center">Data Barang Masuk</h3>

    <table id="produk">
        <tr>
            <th>ID Produk</th>
            <th>ID Gudang</th>
            <th>Jumlah Masuk (Pak)</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Nama Barang</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->produk->id_produk }}</td>
                <td>{{ $d->gudang->id_gudang }}</td>
                <td>{{ $d->jml_masuk }}</td>
                <td>{{ $d->gudang->alamat }}</td>
                <td>{{ $d->tanggal }}</td>
                <td>{{ $d->produk->namabarang }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
