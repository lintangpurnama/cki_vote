<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>

            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kandidat</th>
                            <th>Nama Calon</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kandidat as $r) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r->nama_kandidat ?></td>
                                <td><?= $r->nama_calon ?></td>
                                <td>
                                    <img src="<?= base_url('assets/img/' . $r->foto) ?>" width="100">
                                </td>
                                <td>
                                    <a href="<?= site_url('admin/kandidat/edit/' . $r->id) ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= site_url('admin/kandidat/hapus/' . $r->id) ?>" class="btn btn-danger" onclick="return confirm('yakin??')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>