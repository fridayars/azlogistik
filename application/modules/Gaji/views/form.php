<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penggajian</title>
</head>
<body>
    <div class="container">
        <form action="<?=site_url('Gaji/penggajian')?>" method="post">
            <h1 class="m-4 text-center">Form Penggajian Karyawan</h1>
            <div class="row mt-2">
                <div class="col-md-2">
                    <h5>Nama Karyawan</h5>
                </div>
                <div class="col-md-10">
                    <select name="master_karyawan_id" class="form-control" required>
                        <option value="">Pilih Karyawan</option>
                        <?php foreach ($karyawans as $key => $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['nama_karyawan'] ?> [gol <?= $value['golongan'] ?>]</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <h5>Jumlah Kehadiran</h5>
                </div>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="jumlah_kehadiran" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <h5>Jumlah Cuti</h5>
                </div>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="jumlah_cuti" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <h5>Jam Lembur</h5>
                </div>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="jam_lembur" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-block">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>