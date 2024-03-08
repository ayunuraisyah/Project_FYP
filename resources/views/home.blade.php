<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Harga
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
                <tr>
                    <td>
                        {{ $dataku['id'] }}
                    </td>
                    <td>
                        {{ $dataku['nama'] }}
                    </td>
                    <td>
                        {{ $dataku['harga'] }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>