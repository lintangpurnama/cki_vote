<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?= site_url('admin/user/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row->id ?>">
                    
                    <div class="form-group">
                        <label for="id_kelas">Nama Kelas</label>
                        <select type="text" name="id_kelas" id="id_kelas" class="form-control" value="<?= $row->id_kelas?>">
                            <?php foreach ($kelas as $k) { ?>
                                <option value="<?= $k->id ?>" <?= $row->id_kelas == $k->id ? 'selected' : ''; ?> ><?= $k->nama ?></option>
                            <?php } ?>
                        </select> 
                        <!-- jika id kelas nya sama dengan id maka select -->
                    </div>
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" name="nama"value="<?= $row->nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" value="<?= $row->email ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="level">level</label>
                        <select name="level" id="level" class="form-control">
                            <option value="admin" <?=$row->level == 'admin'? 'selected' : '' ?> >Admin</option>
                            <option value="siswa" <?=$row->level == 'siswa'? 'selected' : '' ?>>Siswa</option>
                        </select>
                    </div>
                    <a href="<?= site_url('admin/user') ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>