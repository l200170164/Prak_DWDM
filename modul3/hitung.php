<html>
<head>
    <title>::Penjumlahan::</title>
</head>
<body>
    <form name="form1" action="hitung.php" method="POST">
    <p> Masukan nilai A : <input type="text" name="A"></p>
    <p> Masukan nilai B : <input type="text" name="B"></p>
    <input type="submit" name="submit" value="kirim">
    <?php
        $A = $_POST['A']
        $B = $_POST['B']
        $jumlah = $_POST['A'] + $_POST['B'];
        echo"<input type='text' name='jumlah' value='$jumlah'>";
    ?>
<body>
</html>