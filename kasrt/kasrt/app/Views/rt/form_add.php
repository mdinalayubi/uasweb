<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p><input type="text" name="nik" placeholder="NIK"></p>
    <p><input type="text" name="nama" placeholder="Nama"></p>
    <p><input type="text" name="kelamin" placeholder="Jenis Kelamin"></p>
    <p><textarea name="alamat" cols="10" rows="10" placeholder="Alamat"></textarea></p>
    <p><input type="text" name="no_rumah" placeholder="Nomor Rumah"></p>
    <p><input type="submit" value="Tambah" class="btn btn-large"></p>
    <p><input type="text" name="status" placeholder="status"></p>
    <a href="<?= base_url('/admin/data_warga');?>" class="btn btn-back">Batal</a>
</form>

<?= $this->include('template/admin_footer'); ?>