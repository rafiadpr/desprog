<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Asosiatif</title>
    <style>
    table {
        border-collapse: collapse;
        width: 40%;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }

    th,
    td {
        border: 1px solid #444;
        padding: 8px 12px;
        text-align: left;
    }

    th {
        background-color: #0b7285;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>

    <h2>Data Dosen</h2>
    <table>
        <tr>
            <th>Keterangan</th>
            <th>Isi</th>
        </tr>
        <?php
        foreach ($Dosen as $key => $value) {
            echo "<tr>
                    <td>{$key}</td>
                    <td>{$value}</td>
                  </tr>";
        }
        ?>
    </table>
</body>

</html>