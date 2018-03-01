<?php $user = $this->session->userdata;?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Admin Hpanel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin Tức</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/news">Tin Tức</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/news/add">Thêm mới tin tức</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thành Viên</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/users">Thành Viên</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/users/add">Thêm mới thành viên</a>
              
            </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh Mục</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/categories">Danh Mục</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/categories/add">Thêm mới danh mục</a>
              
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tags</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/tags">Tags</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>auth/tags/add">Thêm mới tag</a>
              
            </div>
          </li>

        </ul>
        <p class="info_user" >
          Xin chào, <?php echo $user['logged_in']['username']; ?>  <a href="<?php echo base_url(); ?>auth/logout">
            Đăng xuất </a>
        </p>
      </div>
    </nav>