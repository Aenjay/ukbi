<?php
$menu1 = $this->model->GetMenuRole();
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo site_url('assets/') ?>dist/img/ukbiLogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="text-shadow: 1px 1px 4px #ffffff; color: white;">UKBI Adaptif</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo site_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo site_url('profile') ?>" class="d-block"><?php echo $this->model->GetSes("name") ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php foreach ($menu1->result() as $key => $value): ?>
            <?php if ($value->url != "#"): ?>
              <li class="nav-item">
                <a href="<?php echo $value->url ?>" class="nav-link <?php echo ($first_menu == $value->kode_menu) ? 'active' : '' ?>">
                  <i class="nav-icon fa fa-<?php echo $value->icon ?>"></i>
                  <p>
                    <?php echo $value->name_menu ?>
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
            <?php else: ?>
              <li class="nav-item has-treeview <?php echo ($first_menu == $value->kode_menu) ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?php echo ($first_menu == $value->kode_menu) ? 'active' : ''?>">
                  <i class="nav-icon fa fa-<?php echo $value->icon ?>"></i>
                  <p>
                    <?php echo $value->name_menu ?>
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <?php $menu2 = $this->model->GetMenuRole($value->id) ?>
                  <?php foreach ($menu2->result() as $k => $v): ?>
                    <?php if ($v->url != "#"): ?>
                      <li class="nav-item">
                        <a href="<?php echo $v->url ?>" class="nav-link <?php echo ($second_menu == $v->kode_menu) ? 'active' : ''?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p><?php echo $v->name_menu ?></p>
                        </a>
                      </li>
                    <?php else: ?>
                      <li class="nav-item has-treeview <?php echo ($second_menu == $v->kode_menu) ? 'menu-open' : '';?>">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            <?php echo $v->menu ?>
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">                          
                          <?php $menu3 = $this->model->GetMenuRole($value->id) ?>
                          <?php foreach ($menu3->result() as $m => $d): ?>
                          <li class="nav-item">
                            <a href="<?php echo $d->url ?>" class="nav-link <?php echo ($third_menu == $d->kode_menu) ? 'active' : ''?>">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p><?php echo $d->name_menu ?></p>
                            </a>
                          </li>
                        <?php endforeach ?>
                        </ul>
                      </li>
                    <?php endif ?>
                  <?php endforeach ?>
                </ul>
              </li>
            <?php endif ?>
          <?php endforeach ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>