<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #006400;">
    <div class="container-md">
      <a class="navbar-brand" href="/">
      Camp Outdoor</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('categories') ? 'active' : ''); ?>" href="/categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?>" href="/about">About</a>
          </li>
        </ul>

        <?php
            $auth = DB::table('users')->where('id', session()->get('id_user'))->first();
        ?>

        <ul class="navbar-nav ms-auto">
            <?php if(session()->has('id_user')): ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Hello, <?php echo e($auth->name); ?>

                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo e(route('profile')); ?>"><i class="fa fa-user"></i> Profile</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('transaksi')); ?>"><i class="bi bi-layout-text-window"></i> Transaction</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('denda')); ?>"><i class="fa fa-money-bill"></i> Denda</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      <?php echo csrf_field(); ?>
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </ul>
              </li>
            <?php else: ?>
            <li class="nav-item">
              <a href="/login" class="nav-link <?php echo e(($active === "login") ? 'active' : ''); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            <?php endif; ?>
          </ul>

      </div>
    </div>
  </nav>
<?php /**PATH C:\Users\ASUS\Documents\akatara-main\resources\views/partial/navbar.blade.php ENDPATH**/ ?>