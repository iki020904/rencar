<?php
include 'functions1.php';
$pdo = pdo_connect_mysql();
$msg = '';
date_default_timezone_set("Asia/Makassar");

if (!empty($_POST)) {
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $telpon = isset($_POST['telpon']) ? $_POST['telpon'] : '';
    $fotokk = isset($_FILES['fotokk']) ? $_FILES['fotokk']['name'] : '';
    $fotoktp = isset($_FILES['fotoktp']) ? $_FILES['fotoktp']['name'] : '';
    $fotosim = isset($_FILES['fotosim']) ? $_FILES['fotosim']['name'] : '';
    $pickup_time = isset($_POST['pickup_time']) ? $_POST['pickup_time'] : NULL;
    $delivery_option = isset($_POST['delivery_option']) ? $_POST['delivery_option'] : '';
    $time = date("d-m-Y h:i:sa");
  
    $stmt = $pdo->prepare('INSERT INTO rentcar (id, name, pesan, alamat, telpon, fotokk, fotoktp, fotosim, time, pickup_time, delivery_option) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $pesan, $alamat, $telpon, $fotokk, $fotoktp, $fotosim, $time, $pickup_time, $delivery_option]);
    $msg = 'Created Successfully!';
}
?>

<?=template_header1('Create')?>

<div class="content update">
    <h2>PESANAN</h2>
    <form action="create_user.php" method="post" enctype="multipart/form-data">
        <label for="name">NAMA</label>
        <input type="text" name="name" id="name">

        <label for="pesan">MOBIL YANG DIPESAN</label>
        <input type="text" name="pesan" id="pesan">

        <label for="alamat">ALAMAT</label>
        <input type="text" name="alamat" id="alamat">

        <label for="telpon">NOMOR TELEPON</label>
        <input type="text" name="telpon" id="telpon">

        <label for="fotokk">FOTO KARTU KELUARGA</label>
        <input type="file" name="fotokk" id="fotokk">

        <label for="fotoktp">FOTO KTP</label>
        <input type="file" name="fotoktp" id="fotoktp">

        <label for="fotosim">FOTO SIM</label>
        <input type="file" name="fotosim" id="fotosim">

        <label for="pickup_time">ESTIMASI PENGAMBILAN MOBIL</label>
        <input type="datetime-local" name="pickup_time" id="pickup_time">

        <label for="delivery_option">PILIHAN PENGAMBILAN</label>
        <select name="delivery_option" id="delivery_option">
            <option value="Diantar">Diantar</option>
            <option value="Showroom">Pengambilan di Showroom</option>
            <label for="#"> </label>
        </select>

        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer1()?>
