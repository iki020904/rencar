<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Rental Mobil</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="container">
        <h2>Pembayaran Rental Mobil</h2>
        <form action="bayar.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="no_hp">No HP:</label>
            <input type="text" id="no_hp" name="no_hp" required>
            
            <label for="mobil">Mobil:</label>
            <input type="text" id="mobil" name="mobil" required>
            
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" required>
            
    <label for="status_pembayaran">Status Pembayaran:</label>
    <select name="status_pembayaran" id="status_pembayaran">
        <option value="Belum Dibayar">Belum Dibayar</option>
        <option value="Sudah Dibayar">Sudah Dibayar</option>

            <input type="submit" value="Bayar">
        </form>
    </div>
</body>
</html>
