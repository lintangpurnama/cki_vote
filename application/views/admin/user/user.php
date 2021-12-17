<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <h3 class="box-title"><?=$title?></h3>
                <br><br>
                <a href="<?= site_url('admin/user/tambah') ?>" class="btn bg-maroon"><i class="fa fa-plus-circle"></i> Tambah user</a>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kelas</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $r) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r->nama_kelas ?></td>
                                <td><?= $r->nama_user ?></td>
                                <td><?= $r->email ?></td>
                                <td>
                                    <?php if ($r->status == 1 ) { ?>
                                        <button class="btn btn-success"><i class="fa fa-check"></i> Sudah Memilih</button>
                                    <?php } else { ?>
                                        <button class="btn btn-danger"><i class="fa fa-close"></i> Belum Sudah Memilih</button>
                                    <?php } ?>
                                </td>
                                <td><?= $r->level ?></td>
                                <td>
                                    <a href="<?= site_url('admin/user/edit/' . $r->id_user) ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= site_url('admin/user/hapus/' . $r->id_user) ?>" class="btn btn-danger" onclick="return confirm('yakin??')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>