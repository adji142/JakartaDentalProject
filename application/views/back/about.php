<?php
  require_once(APPPATH."views/back/part/header.php");
  require_once(APPPATH."views/back/part/sidebar.php");

  $post = $this->m_controllroom->Getabout()->result();
?>
<div class="content-wrapper">
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">About Jakarta Dental Project</h3>

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
      	<form role="form" enctype="multipart/form-data" action="<?php echo base_url().'index.php/back/controlroom/aboutstore'?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tentang Dental Project</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." name = "about" required=""></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Link Twitter</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Link Twitter" name="twitter" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Link Facebook</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Link Facebook" name="facebook" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Link Instagram</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Link Instagram" name="instagram" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat Perusahaan</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." name = "alamat" required=""></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="Email" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No Telp</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="No Telepon" name="tlp" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Office Hour</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Office Hour" name="office" required="">
            </div>
            <div class="form-group">
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
            <th>Facebook</th>
            <th>Twitter</th>
            <th>Instagram</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            <?php
              foreach ($post as $key) {
                $inuse = '';
                if($key->inuse==1){$inuse = 'disabled';} else {$inuse ='';}
                echo "
                  <tr>
                    <td>".$key->facebook."</td>
                    <td>".$key->twitter."</td>
                    <td>".$key->instagram."</td>
                    <td> <a href='".base_url()."index.php/back/controlroom/deleteabout/".$key->id."' class = 'btn btn-danger'>Delete</a> 
                    <a href='".base_url()."index.php/back/controlroom/default/".$key->id."' class = 'btn btn-default ".$inuse."'>Set Default</a>
                    </td>
                  </tr>
                ";
              }
            ?>
            
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>

</div>
<?php
	require_once(APPPATH."views/back/part/footer.php");
?>