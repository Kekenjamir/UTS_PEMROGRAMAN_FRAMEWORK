<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KenyMotor</title>
    <style>
        h1 {
            font-size: 50px;
            font-weight: bold;
            color: red;
            margin-bottom: 5px;
            margin-top: 0px;
            margin-left: 25px;
        }

        h2 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 5px;
            margin-left: 25px;
        }

        hr {
            height: 10px;
            border: none;
            background-color: #060047;
        }

        nav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin-left: 25px;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            color: #060047;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }


        h3 {
            font-size: 16px;
            font-family: Arial, sans-serif;
            color: #red;
        }

        h4 {
            font-size: 35px;
            font-family: Arial, sans-serif;
            text-align: center;
            color: red;
            margin-bottom: 2px;
            margin-top: 2px;
        }

        h5 {
            font-size: 16px;
            font-family: Arial, sans-serif;
            text-align: center;
            color: #060047;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: red;
            color: #fff;

        }

        tr:nth-child(even) {
            background-color: #f2f2f2;

        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <h1> KenyMotor </h1>

    <h2> Menjual Motor Cash Dan Kredit </h2>

    <hr>
    <nav>
        <ul>
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('/honda'); ?>">Honda</a></li>
            <li><a href="<?php echo base_url('/yamaha'); ?>">Yamaha</a></li>
            <li><a href="<?php echo base_url('/kontak'); ?>">Kontak</a></li>
        </ul>
    </nav>
    <hr>

    <h3>
        <marquee>Ayo Beli Motor Cash dan Credit Di KenyMotor</marquee>
    </h3>

    <h4> HARGA MOTOR HONDA</h4>
    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Varian</th>
                <th>Harga Cash</th>
                <th>DP</th>
                <th>Kredit 6 Bulan</th>
                <th>Kredit 12 Bulan</th>
                <th>Kredit 24 Bulan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($honda_list as $item) : ?>
                <tr>
                    <td><?= $item['produk'] ?></td>
                    <td><?= $item['varian'] ?></td>
                    <td><?= number_format($item['harga']) ?></td>
                    <td><?= number_format(1000000) ?></td>
                    <td><?= number_format($item['harga_kredit'][6]) ?></td>
                    <td><?= number_format($item['harga_kredit'][12]) ?></td>
                    <td><?= number_format($item['harga_kredit'][24]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <hr>
    <h5>
        Website dibuat oleh: <br>
        Keny Mihewu <br>
        NIM C2057201030 <br>
        Program Studi Sistem Informasi <br>
        Untuk memenuhi Ujian Tengah Semester Mata Kuliah Pemrograman Framework <br>
    </h5>
    <hr>
</body>

</html>