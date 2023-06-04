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
    <h3 align="center">Data Supir</h3>

    <table id="produk">
        <tr>
            <th>ID Supir</th>
            <th>Nama </th>
            <th>Tanggal Masuk</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Kendaraan</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id_supir }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->tgl_lahir }}</td>
                <td>{{ $d->alamat}}</td>
                <td>{{ $d->nohp}}</td>
                <td>{{ $d->kendaraan}}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
