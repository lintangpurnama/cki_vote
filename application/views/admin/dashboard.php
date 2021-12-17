<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= $total_user ?></h3>

                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="<?=
                                site_url('admin/user')
                                ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $total_suara ?></h3>

                        <p>Total Suara</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?=
                                site_url('admin/suara')
                                ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="alert alert-warning alert-dismissible">
            <h4><i class="icon fa fa-warning"></i>Perolehan Suara</h4>
            <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-success" style="text-decoration: none;"><span class="fa fa-refresh"></span> Refresh untuk melihat data baru</a>
        </div>
        <canvas id="myChart" height="100"></canvas>
    </section>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $kandidat1 ?>,
                        <?= $kandidat2 ?>,
                        <?= $kandidat3 ?>,
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script>

</div>