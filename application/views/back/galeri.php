<?php
  require_once(APPPATH."views/back/part/header.php");
  require_once(APPPATH."views/back/part/sidebar.php");

  $post = $this->M_controllroom->Getgaleri()->result();
?>
<link href="<?php echo base_url()?>assets/dropzone.min.css" rel="stylesheet">
<script src="<?php echo base_url()?>assets/dropzone.min.js"></script>
<style type="text/css">

body{
  background-color: #E8E9EC;
}

.dropzone {
  margin-top: 20px;
  border: 2px dashed #0087F7;
}

</style>
<div class="content-wrapper">
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Galeri Jakarta Dental Project</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <p align="center">
          <font color="red">
            <?php
              if(validation_errors() || $this->session->flashdata('result_error')){
                echo validation_errors();
                echo $this->session->flashdata('result_error');
              }
            ?>
          </font>
        </p>
      	<form role="form" enctype="multipart/form-data" action="<?php echo base_url().'index.php/back/controlroom/galeristore'?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tag line Foto</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tag Line" name="tag">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Deskripsi singkat max 30 char</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi" name="desc" maxlength="30">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile" name="image">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
              <p class="help-block">Example block-level help text here.</p>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Tag</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            <?php
              foreach ($post as $key) {
                echo "
                  <tr>
                    <td>".$key->tag."</td>
                    <td><img src='".base_url()."front/images/galery/".$key->image."' class='img-circle photo' height='5%'/></td>
                    <td> <a href='".base_url()."index.php/back/controlroom/deletegaleri/".$key->id."' class = 'btn btn-danger'>Delete</a>
                    </td>
                  </tr>
                ";
              }
            ?>
            <!-- <a href='".base_url()."index.php/back/controlroom/editstaff/".$key->id."' class = 'btn btn-default'>Edit</a> -->
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>

</div>
<script type="text/javascript">
$(function () {
  Dropzone.autoDiscover = false;

  var foto_upload= new Dropzone(".dropzone",{
  url: "<?php echo base_url('index.php/back/controlroom/upload_Data') ?>",
  maxFiles:3,
  maxFilesize: 2,
  method:"post",
  acceptedFiles:"image/jpeg",
  paramName:"userfile",
  dictInvalidFileType:"Type file ini tidak dizinkan",
  addRemoveLinks:true,
  });


  //Event ketika Memulai mengupload
  
  foto_upload.on("sending",function(a,b,c){
    a.token=Math.random();
    c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
  });


  //Event ketika foto dihapus
  foto_upload.on("removedfile",function(a){
    var csrf_test_name = $("input[name=csrf_test_name]").val();
    var token=a.token;
    $.ajax({
      type:"post",
      data:{token:token},
      url:"<?php echo base_url('index.php/back/controlroom/remove_foto') ?>",
      cache:false,
      dataType: 'json',
      success: function(){
        console.log("Foto terhapus");
      },
      error: function(){
        console.log("Error");

      }
    });
  });
});

</script>
<?php
	require_once(APPPATH."views/back/part/footer.php");
?>