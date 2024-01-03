<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="nik" value="<?= $data['nik'];?>" >
    </p>
    <p>
        <input type="text" name="nama" value="<?= $data['nama'];?>" >
    </p>
    <p>
        <input type="text" name="kelamin" value="<?= $data['kelamin'];?>" >
    </p>
    <p>
        <textarea name="alamat" cols="10" rows="10"><?=$data['alamat'];?></textarea>
    </p>
    <p>
        <input type="text" name="no_rumah" value="<?= $data['no_rumah'];?>" >
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>
