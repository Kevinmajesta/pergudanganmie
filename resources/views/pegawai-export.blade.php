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
    <h3 align="center">Data Pegawai</h3>

    <table id="produk">
        <tr>
            <th>ID Gudang</th>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Tanggal Masuk</th>
            <th>Alamat Pegawai</th>
            <th>Alamat Gudang</th>
            <th>No HP</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->gudang->id_gudang }}</td>
                <td>{{ $d->id_pegawai }}</td>
                <td>{{ $d->namapegawai }}</td>
                <td>{{ $d->tgl_masuk }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->gudang->alamat }}</td>
                <td>{{ $d->nohp }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
