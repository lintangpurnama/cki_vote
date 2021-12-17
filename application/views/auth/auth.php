<section class="sec1" id="sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="display-4 text-primary mt-5 h2-sec1 font-weight-bold">Selamat Datang Di CKI Vote </h2>
                <p class="text-secondary p-sec1">Silahkan gunakan hak suara kalian untuk menentukan Ketua BEM periode 2022-2023</p>
                <div class="a-sec1">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Login disini!</a>
                    <a href="#sec2" class="btn btn-secondary">Buat akun?</a>
                </div>

            </div>
            <div class="col-md-6">
                <img src="<?= base_url('assets/') ?>img/hero1.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="sec2" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= base_url('assets/') ?>img/hero2.png" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="text-primary "> Belum Punya Akun??</h2>
                <p>Silahkan daftar di sini</p>

                <form action="<?= site_url('auth/registrasi') ?>" method="post">
                    <input type="hidden" name="id_kelas" value="<?= set_value('id_kelas') ?>">
                    <div class="form-group">
                        <label for="nama" class="text-secondary">Nama</label>
                        <input type="name" class="form-control" name="nama" id="" value="<?= set_value('nama') ?>">
                        <?= form_error('nama', '<span class="text-danger small pl-3" >', '</span>') ?>

                    </div>
                    <div class="form-group">
                        <label for="Email" class="text-secondary">Email</label>
                        <input type="email" class="form-control" name="email" id="" value="<?= set_value('email') ?>">
                        <?= form_error('email', '<span class="text-danger small pl-3" >', '</span>') ?>
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-secondary">Password</label>
                        <input type="password" class="form-control" name="password" id="">
                        <?= form_error('password', '<span class="text-danger small pl-3" >', '</span>') ?>
                    </div>


                    <div class="form-group">
                        <label for="id_kelas">Kelas</label>
                        <select type="text" name="id_kelas" id="id_kelas" class="form-control">
                       <option value="autofocus" >Pilih Kelas</option>
                            <?php foreach ($kelas as $k) { ?>
                                
                                <option value="<?= $k->id ?>"><?= $k->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary"> Daftar Akun</button>
                </form>
            </div>

        </div>
    </div>
</section>
<footer>
    <p class="text-secondary text-center text-muted">Copyright CKI VOTE - BEM STIKOM CKI 2021</p>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('auth/login') ?>" method="post">
                    <div class="form-group">
                        <label for="Email1" class="text-secondary">Email</label>
                        <input type="text" name="email1" class="form-control" id="Email1" required>
                    </div>
                    <div class="form-group">
                        <label for="Password1" class="text-secondary">Password</label>
                        <input type="password" name="password1" class="form-control" id="Password1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="modal-footer">


            </div>
        </div>
    </div>
</div>