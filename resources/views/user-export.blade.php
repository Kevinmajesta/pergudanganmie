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
    <h3 align="center">Data User</h3>

    <table id="produk">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->nohp }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->password }}</td>
                <td>{{ $d->email }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
