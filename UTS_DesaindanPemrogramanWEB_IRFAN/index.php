<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>UTS Bagain B_Irfan Mulyana Abdillah_SE02A_18104013</title>
    
</head>

<body>
    <h1>UTS - Bagian 2</h1>
    <p>Bambang merupakan seorang pelatih klub sepak bola yang ingin menampilkan informasi pemainnya yang terdiri dari 
    data sebagai berikut:</p>

    <?php
    // data array
    $pemain = array(
        array("No" => "1", "Nama" => "Cristiano Messi", "Tinggi Badan" => 180, "Posisi" => "Striker"),
        array("No" => "2", "Nama" => "Bejo Leonardo", "Tinggi Badan" => 167, "Posisi" => "Midfielder"),
        array("No" => "3", "Nama" => "Alfa Midi", "Tinggi Badan" => 190, "Posisi" => "Defender")
    );
    ?>


    <?php if (count($pemain) > 0): ?> <!-- Kondisi -->
    <table class="table table-bordered"> <!--class menggambil dari material bootstrap-->
        <thead>
            <tr>
                <th><?php echo implode('</th><th>', array_keys(current($pemain))); ?></th> <!--function implode menerima parameternya dalam urutan apa pun dan function current untuk mengembalikan nilai elemen saat ini dalam array-->
            </tr>
        </thead>
        <tbody>
        <?php foreach ($pemain as $row): array_map('htmlentities', $row); ?> <!--array_map mengembalikan sebuah array dan htmlentities hanya memastikan bahwa suatu nilai dapat ditampilkan dan tidak akan merusak kode HTML. -->
            <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

</body>

</html>