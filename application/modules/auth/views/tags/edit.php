<?php $this->load->view('templates/backend/header'); ?>

    <?php $this->load->view('templates/backend/nav_head'); ?>
    

    <main>

        <div class="container-fluid">
            <h3>Thêm tag</h3>

            <?php if(isset($message)): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warnning!!!</strong> <?php echo $message; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <?php if(validation_errors() != false): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warnning!!!</strong> <?php echo validation_errors(); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
            <?php endif; ?>

            <div class="card card-body bg-light">
                <form action="<?php echo current_url(); ?>" method="post" accept-charset="utf-8">
                    <div class="top_button">
                        <button name="submit" type="submit" id="submit" class="btn btn-primary">Lưu</button>
                        <a href="" class="btn btn-secondary">Trở về</a>
                    </div>
                    <ul class="nav nav-tabs nav_tabs_custom" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin chính</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thông tin chi tiết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Seo</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <label for="title">Tên tag</label>
                            <input type="text" name="name_tag" value="<?php if(isset($info_detail['name_tag'])) echo $info_detail['name_tag']; ?>" id="name_tag" class="form-control">
                            <label for="title">Đường dẫn</label>
                            <input type="text" name="slug_tag" value="<?php if(isset($info_detail['slug_tag'])) echo $info_detail['slug_tag']; ?>" id="slug_tag" class="form-control">
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <label for="title">Thông tin khác</label>
                            <input type="text" name="else_tag" value="<?php if(isset($info_detail['else_tag'])) echo $info_detail['else_tag']; ?>" id="title" class="form-control">
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <label for="title">Tiêu đề</label>
                            <input type="text" name="seo_title" value="" id="seo_title" class="form-control">

                            <label for="title">Từ khóa</label>
                            <input type="text" name="keyword" value="" id="keyword" class="form-control">

                            <label for="content">Mô tả</label>
                            <textarea class="form-control" name="metadata" cols="40" rows="10" id="content" value=""></textarea>
                        </div>
                    </div>
                    <div class="top_button">
                        <button name="submit" type="submit" id="submit" class="btn btn-primary">Lưu</button>
                        <a href="" class="btn btn-secondary">Trở về</a>

                    </div>
                </form>
                
            </div>
        </div>

    </main><!-- /.container -->

<?php $this->load->view('templates/backend/footer'); ?>