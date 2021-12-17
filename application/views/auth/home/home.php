<section class="sec1" id="sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4 text-primary mt-5 h2-sec1 font-weight-bold text-center">Perolehan Suara Sementara</h2>
                <canvas id="myChart" height="100"></canvas>
            </div>
        </div>
    </div>
</section>
<section class="sec2" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4 text-primary mt-5 h2-sec1 font-weight-bold text-center mb-5">Voting</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($kandidat as $k) { ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="<?= base_url('assets/img/' . $k->foto) ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-primary text-center"><?= $k->nama_kandidat ?></h5>
                            <p class="card-text text-center font-weight-bold text-secondary"><?= $k->nama_calon ?></p>
                            <div class="d-flex justify-content-between">
                                <a href="<?= site_url('home/visimisi/' . $k->id) ?>" class="btn btn-primary btn-sm">Lihat Visi & Misi</a>

                                <?php if ($user->status == 0) : ?>
                                    <a href="#sec2" class="btn btn-success btn-sm" data-nama_kandidat="<?= $k->nama_kandidat ?>" data-id_user="<?= $this->session->userdata('id') ?>">Pilih <?= $k->nama_kandidat ?></a>
                                <?php else : ?>
                                    <button href="#sec2" class="btn btn-success btn-sm" disabled>Pilih <?= $k->nama_kandidat ?></button>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<footer>
    <p class="text-secondary text-center text-muted">Copyright CKI VOTE - BEM STIKOM CKI 2021</p>
</footer>
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
            datasets: [{
                label: '# Hasil Suara',
                data: [
                    <?= $kandidat1 ?>,
                    <?= $kandidat2 ?>,
                    <?= $kandidat3 ?>,
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>