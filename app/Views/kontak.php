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
            text-align: center;
            font-family: Arial, sans-serif;
            color: black;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Styling untuk bagian kontak */
        .contact {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .contact-item {
            margin: 20px;
            text-align: center;
        }

        .contact-item img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .contact-item a {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px;
        }

        /* Styling untuk bagian alamat */
        .address {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .address p {
            margin: 0;
            line-height: 1.5;
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

    <div class="contact">
        <div class="contact-item">
            <img src="whatsapp.png" alt="WhatsApp">
            <p>WhatsApp</p>
            <a href="https://wa.me/6281351599995">081351599995</a>
        </div>

        <div class="contact-item">
            <img src="Instagram.png" alt="Instagram">
            <p>Instagram</p>
            <a href="https://www.instagram.com/kekenmisj/">@kekenmisj</a>
        </div>

        <div class="contact-item">
            <img src="email.png" alt="Email">
            <p>Email</p>
            <a href="mailto:kheny1601@gmai.com">kheny1601@gmai.com</a>
        </div>
    </div>

    <div class="address">
        <p>Jl. Amerika Utara No 1234</p>
        <p>Telp: (021) 1234567</p>
        <p>Fax: (021) 1234568</p>
    </div>

</body>

</html>