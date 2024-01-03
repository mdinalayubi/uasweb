<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p><input type="text" name="keterangan" placeholder="Keterangan"></p>
    <p><input type="text" id= "date" name="tanggal" placeholder="Tanggal"></p>
    <p><input type="text" name="bulan" placeholder="Bulan"></p>
    <p><input type="text" name="tahun" placeholder="Tahun"></p>
    <p><input type="text" name="jumlah" placeholder="Jumlah"></p>
    <p><input type="text" name="warga_id" placeholder="ID Warga"></p>
    <p><input type="submit" value="Tambah" class="btn btn-large"></p>
    <a href="<?= base_url('/admin/iuran');?>" class="btn btn-back">Batal</a>
</form>

<?= $this->include('template/admin_footer'); ?>