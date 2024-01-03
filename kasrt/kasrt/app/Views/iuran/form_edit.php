<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="keterangan" value="<?= $data['keterangan'];?>" >
    </p>
    <p>
        <input type="text" name="tanggal" value="<?= $data['tanggal'];?>" >
    </p>
    <p>
        <input type="text" name="bulan" value="<?= $data['bulan'];?>" >
    </p>
    <p>
        <input type="text" name="tahun" value="<?= $data['tahun'];?>" >
    </p>
    <p>
        <input type="text" name="jumlah" value="<?= $data['jumlah'];?>" >
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>
