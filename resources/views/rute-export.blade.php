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
    <h3 align="center">Data Rute</h3>

    <table id="produk">
        <tr>
            <th>ID Supir</th>
            <th>ID Rute</th>
            <th>Waktu Tempuh (Jam)</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->supir->id_supir }} - {{ $d->supir->nama }}</td>
                <td>{{ $d->id_rute }}</td>
                <td>{{ $d->waktutempuh }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
