<?php $this->load->view('templates/backend/header'); ?>

    <?php $this->load->view('templates/backend/nav_head'); ?>
    

    <main>
        
        <div class="container-fluid">
            <h3>Thêm tin tức</h3>
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
                            <input type="text" name="title" value="<?php if(isset($info_detail['title'])) echo $info_detail['title']; ?>" id="title" class="form-control">

                            <label for="description">Mô tả</label>
                            <textarea class="form-control" name="description" cols="40" rows="10" id="description" value=""><?php if(isset($info_detail['description'])) echo $info_detail['description']; ?></textarea>

                            <label for="content">Nội dung</label>
                            <textarea class="form-control" name="content" cols="40" rows="10" id="content" value=""><?php if(isset($info_detail['content'])) echo $info_detail['content']; ?></textarea>

                            <label for="content">Danh Mục</label>
                            <select class="form-control" name="category">
                                <?php foreach($categorys as $category) {?>
                                    <option value="<?php echo $category['id']; ?>" <?php if( isset($info_detail['cat_id']) && $category['id']==$info_detail['cat_id']) echo 'selected'; ?> >
                                            <?php echo $category['name']; ?>
                                                
                                    </option>
                                <?php }?>
                            </select>

                            <label for="content">Tags</label>
                            <select id="tagss" class="form-control select2_tags" name="tags[]" multiple="multiple">
                                <?php foreach($tags as $tag) {?>
                                    <option value="<?php echo $tag['id']; ?>" <?php if( isset($info_detail['new_id']) && $info_detail['new_id'] == $tag['new_id'] ) echo 'selected'; ?> >
                                            <?php echo $tag['name_tag']; ?>
                                    </option>
                                <?php }?>
                            </select>
                            
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <label for="title">Kích hoạt</label>
                            <select class="form-control" name="active">
                                <option value="1" <?php if( isset($info_detail['active']) && $info_detail['active'] === "1") echo 'selected'; ?> >
                                Có
                            </option>
                              <option value="0" <?php if( isset($info_detail['active']) && $info_detail['active'] === "0") echo 'selected'; ?> >Không</option>
                            </select>
                            

                            <label for="title">Hiển thị slide trang chủ</label>
                            <select class="form-control" name="is_slider">
                              <option value="1" <?php if( isset($info_detail['is_slide_head']) && $info_detail['is_slide_head'] === "1") echo 'selected'; ?> >Có</option>
                              <option value="0" <?php if( isset($info_detail['is_slide_head']) && $info_detail['is_slide_head'] === "0") echo 'selected'; ?> >Không</option>
                            </select>

                            <label for="title">Ảnh đại diện</label>
                            <input id="image_new" name="image_new" type="text" value="<?php if( isset($info_detail['image'])) echo '/ci_blog2/public/static/uploads/images/'.$info_detail['image']; ?>" style="width:30%">
                            <a class="btn btn-default" style="margin: 0 0 10px 2px;" onclick="selectFileWithCKFinder('image_new');">Chọn ảnh</a>
                            
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

    <!-- ckeditor -->
    <script>
        CKEDITOR.replace( 'content', {
            
            filebrowserBrowseUrl: '<?php echo base_url(); ?>public/third_party/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '<?php echo base_url(); ?>public/third_party/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: '<?php echo base_url(); ?>public/third_party/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: '<?php echo base_url(); ?>public/third_party/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '<?php echo base_url(); ?>public/third_party/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: '<?php echo base_url(); ?>public/third_party/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });

       
        function selectFileWithCKFinder( elementId ) {
            CKFinder.popup( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( elementId );
                        output.value = file.getUrl();
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( elementId );
                        output.value = evt.data.resizedUrl;
                    } );
                }
            } );
        }

        function ConfirmDelete() {
            return confirm("Are you sure you want to delete?");
        }

        // select2
        $(document).ready(function() {
            $('.select2_tags').select2();
        });
    </script>
<?php $this->load->view('templates/backend/footer'); ?>