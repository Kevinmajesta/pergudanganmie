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
    <h3 align="center">Data Outlet</h3>

    <table id="produk">
        <tr>
            <th>Pegawai</th>
            <th>ID Outlet</th>
            <th>Alamat Outlet</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->pegawai->namapegawai }}</td>
                <td>{{ $d->id_outlet }}</td>
                <td>{{ $d->alamatoutlet }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
