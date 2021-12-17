  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU ADMINISTRATOR</li>

        <li class="<?= $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?= $this->uri->segment(2) == 'kelas' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/kelas') ?>">
            <i class="fa fa-book"></i> <span>Kelas</span>
          </a>
        </li>
        <li class="<?= $this->uri->segment(2) == 'kandidat' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/kandidat') ?>">
            <i class="fa fa-users"></i> <span>Kandidat</span>
          </a>
        </li>
        <li class="<?= $this->uri->segment(2) == 'visi_misi' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/visi_misi') ?>">
            <i class="fa fa-paper-plane"></i> <span>Visi & Misi</span>
          </a>
        </li>
        <li class="<?= $this->uri->segment(2) == 'suara' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/suara') ?>">
            <i class="fa fa-bell-o"></i> <span>Suara</span>
          </a>
        </li>
        <li class="<?= $this->uri->segment(2) == 'user' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/user') ?>">
            <i class="fa fa-user"></i> <span>user</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('auth/logout') ?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>