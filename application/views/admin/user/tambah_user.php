<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?= site_url('admin/user/simpan') ?>" method="post">
                    <div class="form-group">
                        <label for="id_kelas">Nama Kandidat</label>
                        <select type="text" name="id_kelas" id="id_kelas" class="form-control">

                            <?php foreach ($kelas as $k) { ?>
                                <option value="<?= $k->id ?>"><?= $k->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="level">level</label>
                        <select name="level" id="level" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>
                    <a href="<?= site_url('admin/user') ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>