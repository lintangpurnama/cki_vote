<section class="sec1" id="sec1">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-5">
                <img src="<?= base_url('assets/img/' . $kandidat->foto) ?>" alt="" srcset="" class="img-cirle">
                <h2 class="text-primary mt-5 h2-sec1 font-weight-bold text-center mb-5"><?= $kandidat->nama_calon ?></h2>

                <table class="table">
                    <tr>
                        <th>VISI</th>
                        <td>
                            <?= $visimisi->visi ?>
                        </td>
                    </tr>
                    <tr>
                        <th>MISI</th>
                        <td>
                            <?= $visimisi->misi ?>
                        </td>
                    </tr>
                </table>
                <a href="<?= base_url('home') ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section>
<footer>
    <p class="text-secondary text-center text-muted">Copyright CKI VOTE - BEM STIKOM CKI 2021</p>
</footer>