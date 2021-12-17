<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header">
            <?= $this->session->flashdata('message'); ?>
                <a href="<?=site_url('admin/kelas/tambah') ?>" class="btn bg-maroon"><i class="fa fa-plus-circle"></i> Tambah Data Kelas</a>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rows as $r) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r->nama ?></td>
                                <td>
                                    <a href="<?= site_url('admin/kelas/edit/' . $r->id) ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= site_url('admin/kelas/hapus/' . $r->id) ?>" class="btn btn-danger" onclick="return confirm('yakin??')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>