<?php $this->load->view('templates/backend/header'); ?>

    <?php $this->load->view('templates/backend/nav_head'); ?>
    

    <main>

        <div class="container-fluid">
            <h3>Thêm danh mục</h3>
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
                            <label for="title">Tiêu đề</label>
                            <input type="text" name="title" value="<?php if(isset($info_detail['name'])) echo $info_detail['name']; ?>" id="title" class="form-control">
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <label for="title">Kích hoạt</label>
                            <select class="form-control" name="active">
                                <option value="1" <?php if( isset($info_detail['active']) && $info_detail['active'] === "1") echo 'selected'; ?> >
                                Có
                            </option>
                              <option value="0" <?php if( isset($info_detail['active']) && $info_detail['active'] === "0") echo 'selected'; ?> >Không</option>
                            </select>
                            
                            
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