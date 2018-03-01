<?php $this->load->view('templates/backend/header'); ?>
    <link href="<?php echo base_url('public/third_party/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <?php $this->load->view('templates/backend/nav_head'); ?>
    

    <main>
        
        <div class="container-fluid">
            <h3>Danh sách bài viết</h3>
            <div class="table-responsive ">
                <table id="table_data" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Active</th>
                            <th>Is slide head</th>
                            <th>Thumbs</th>
                            <th>Hành động</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
         
                    <tfoot>
                        <tr>
                            <th>Stt</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Active</th>
                            <th>Is slide head</th>
                            <th>Thumbs</th>
                            <th>Hành động</th>
                            
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </main><!-- /.container -->

    
<?php $this->load->view('templates/backend/footer'); ?>

<script src="<?php echo base_url('public/third_party/datatables/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript">
 
    var table;
     
    $(document).ready(function() {
     
        //datatables
        table = $('#table_data').DataTable({ 
     
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
     
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('auth/news/ajax_list')?>",
                "type": "POST"
            },
     
            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
     
        });
     
    });
</script>