<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <a href="<?= site_url('admin/visi_misi/tambah') ?>" class="btn bg-maroon"><i class="fa fa-plus-circle"></i> Tambah Visi & Misi</a>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kandidat</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rows as $r) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r->nama_kandidat ?></td>
                                <td><?= $r->visi ?></td>
                                <td><?= $r->misi ?></td>
                                <td>
                                    <a href="<?= site_url('admin/visi_misi/edit/' . $r->id_visimisi) ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= site_url('admin/visi_misi/hapus/' . $r->id_visimisi) ?>" class="btn btn-danger" onclick="return confirm('yakin??')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>