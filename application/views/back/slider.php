<?php
  require_once(APPPATH."views/back/part/header.php");
  require_once(APPPATH."views/back/part/sidebar.php");
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
      <h3 class="box-title">Ganti Slider Halaman Utama</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      Pada halaman ini anda bisa mengganti slider di halaman utama.
      <p>Curent Slider :</p>
      <div class="row">
      	<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php echo base_url()."front/images/bg1.jpg"?>" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url()."front/images/bg2.jpg"?>" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url()."front/images/bg3.jpg"?>" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
              <h3>Resolusi yang di sarankan 1680 x 1117</h3>
              <p>Upload your File Hire</p>
              <form role="form" action="<?php echo base_url().'index.php/back/controlroom/slider'; ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="one">

                  <p class="help-block">Slide Pertama</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile" >File input</label>
                  <input type="file" id="exampleInputFile" name="two">

                  <p class="help-block">Slide Kedua</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="three">

                  <p class="help-block">Slide Ketiga</p>
                </div> -->
                
              
            <div class="dropzone">

			  <div class="dz-message">
			   <h3>Click or drag and drop your image (*.JPG) hire (Max. 3 photos)</h3>
			  </div>

			</div>
              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                <a href="<?php echo base_url()."index.php/back/controlroom/saveslider"?>" class="btn btn-primary">Submit</a>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>

</div>
    <!-- /.co -->
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