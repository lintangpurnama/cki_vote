<div class="content-wrapper">
    <section class="content">
        <div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <h3 class="box-title"><?=$title?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama User</th>
                            <th>Nama Kandidat</th>
                            <th>Created</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rows as $r) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r->nama_user ?></td>
                                <td><?= $r->nama_kandidat ?></td>
                                <td><?= $r->created ?></td>
                                <td>

                                    <a href="<?= site_url('admin/visi_misi/hapus/' . $r->id_suara) ?>" class="btn btn-danger" onclick="return confirm('yakin??')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>