<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?= site_url('admin/visi_misi/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row->id ?>">
                    <div class="form-group">
                        <label for="id_kandidat">Nama Kandidat</label>
                        <select type="text" name="id_kandidat" id="id_kandidat" class="form-control">

                            <?php foreach ($kandidat as $k) { ?>
                                <option value="<?= $k->id ?>" <?= $row->id_kandidat == $k->id ? 'selected' : ''; ?>><?= $k->nama_kandidat ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <textarea name="visi" id="visi" class="ckeditor" required><?= $row->visi ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <textarea name="misi" id="misi" class="ckeditor" required><?= $row->misi ?></textarea>
                    </div>

                    <a href="<?= site_url('admin/visi_misi') ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>