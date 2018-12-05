<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlroom extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('back/m_controllroom');
		$this->load->helper(array('url','file'));
	}
	function slider()
	{
		// $file1 = 'bg1.jpg'
		// $file1 = 'bg2.jpg'
		// $file1 = 'bg3.jpg'
		// if (!unlink($file1) && !unlink($file2) && !unlink($file3))
		// {
		//   echo "Error Deleting data";
		// }
		// else
		// {
		  
		// }
		// $one = $this->input->post('one');
		// $two = $this->input->post('two');
		// $three = $this->input->post('three');
		// $this->form_validation->set_rules('one','one','required');
  //       $this->form_validation->set_rules('two','two','required');
  //       $this->form_validation->set_rules('three','three','required');
  //       if($this->form_validation->run() == FALSE){
  //           $this->session->set_flashdata('result_login','Field Can not be empty');
  //           redirect('index.php/back/dashboard/slider');
  //       }
  //       else{
        	
        //}
	}
	function upload_Data()
	{
        $config['upload_path']   = './front/images';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);
        if($this->upload->do_upload('userfile')){
        	$id_reg = $this->session->userdata('id_reg');
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('staging_image',array('filename'=>$nama,'token'=>$token));
        }
	}
	function remove_foto()
	{
		$token=$this->input->post('token');

		$foto=$this->db->get_where('staging_image',array('token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->filename;
			if(file_exists($file='./front/images/'.$nama_foto)){
			unlink($file);
			}
			$this->db->delete('staging_image',array('token'=>$token));

		}
	}
	function saveslider()
	{
		// Begin ceking image data
		$dataImage = $this->m_controllroom->ImgSliderdata();
		$image1 = './front/images/bg1.jpg';
		$image2 = './front/images/bg2.jpg';
		$image3 = './front/images/bg3.jpg';
		if($dataImage->num_rows()>0){
			$fileMoved1 = copy($image1, './front/images/BackupSlider/'.md5(rand(1,10000))).'.jpg';
			$fileMoved2 = copy($image2, './front/images/BackupSlider/'.md5(rand(1,10000))).'.jpg';
			$fileMoved3 = copy($image3, './front/images/BackupSlider/'.md5(rand(1,10000))).'.jpg';
			if($fileMoved1){
				unlink($image1);
			}
			if ($fileMoved2) {
				unlink($image2);
			}
			if ($fileMoved3) {
				unlink($image3);
			}
			$urut =1;
			foreach ($dataImage->result() as $key) {
				rename('./front/images/'.$key->filename, './front/images/bg'.$urut.'.jpg');
				// echo "string".$urut;
				$urut +=1;
			}
			$this->m_controllroom->DeleteStaging();
			$this->session->set_flashdata('result_Sukses','Upload Sider Berhasil');
            redirect('index.php/back/dashboard/slider');
		}
		else{
			$this->session->set_flashdata('result_error','Belum ada data yang di pilih');
            redirect('index.php/back/dashboard/slider');
		}
	}
	function stafstore()
	{
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('Jabatan');
		$email = $this->input->post('Email');
		$phone = $this->input->post('phone');

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('Jabatan','Jabatan','required');
		$this->form_validation->set_rules('Email','Email','required|valid_email');
		$this->form_validation->set_rules('phone','phone','required');
		if($this->form_validation->run() == FALSE){
               $this->session->set_flashdata('result_error','Field Can not be empty');
               redirect('index.php/back/dashboard/staff');
        }
        else {
			$config['upload_path']   = './front/images/Staff';
	        $config['allowed_types'] = 'gif|jpg|png|ico';
	        $this->load->library('upload',$config);
	        if($this->upload->do_upload('image')){
	        	$id_reg = $this->session->userdata('id_reg');
	        	$nama_photo=$this->upload->data('file_name');
		        	$input = array
					('name' => $nama,
					 'position' => $jabatan,
					 'email' =>$email,
					 'phone' => $phone,
					 'photo' => $nama_photo,
					 'file_name'=>$nama_photo
					);
				$this->m_controllroom->storestaff($input,'app_staff');
				$this->session->set_flashdata('result_success','Tambah Staff Berhasil');
               	redirect('index.php/back/dashboard/staff');
	        	// $this->db->insert('staging_image',array('filename'=>$nama,'token'=>$token));
	        }
			else{
				$this->session->set_flashdata('result_error','Error Getting Image');
               redirect('index.php/back/dashboard/staff');
			}
		}
	}
	function deletestaff($id)
	{
		try {
			$this->m_controllroom->deletestaff($id);
			$this->session->set_flashdata('result_success','Data Berhasil Di Hapus');
			redirect('index.php/back/dashboard/staff');

		} catch (Exception $e) {
			$this->session->set_flashdata('result_error',$e);
        	redirect('index.php/back/dashboard/staff');
		}
	}
	function aboutstore()
	{
		var_dump($this->input->post('about'));
		// $this->form_validation->set_rules('about','about','required');
		$this->form_validation->set_rules('Email','Email','required|valid_email');
		$this->form_validation->set_rules('tlp','tlp','required');
		$this->form_validation->set_rules('office','office','required');
		$this->form_validation->set_rules('twitter','twitter','required');
		$this->form_validation->set_rules('facebook','facebook','required');
		$this->form_validation->set_rules('instagram','instagram','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		if($this->form_validation->run() == FALSE){
               $this->session->set_flashdata('result_error','Field Can not be empty');
               redirect('index.php/back/dashboard/about');
        }
        else{
        	$about = $this->input->post('about');
        	$twitter = $this->input->post('twitter');
        	$facebook = $this->input->post('facebook');
        	$instagram = $this->input->post('instagram');
        	$Email = $this->input->post('Email');
        	$tlp = $this->input->post('tlp');
        	$office = $this->input->post('office');
        	$alamat = $this->input->post('alamat');

        	$input = array(
        		'about' =>$about , 
        		'twitter'=>$twitter,
        		'facebook' =>$facebook,
        		'instagram' => $instagram,
        		'email'=> 'mailto:'.$Email,
        		'alamt' => $alamat,
        		'notlp' => $tlp,
        		'officehours'=>$office,
        		'inuse'=>0
        	);
        	try {
        		$this->m_controllroom->storeabout($input,'app_about');
        		$this->session->set_flashdata('result_success','Data Berhasil diSimpan');
        		redirect('index.php/back/dashboard/about');
        	} catch (Exception $e) {
        		$this->session->set_flashdata('result_error',$e);
        		redirect('index.php/back/dashboard/about');

        	}
        }
	}
	function deleteabout($id)
	{
		try {
			$this->m_controllroom->deleteabout($id);
			$this->session->set_flashdata('result_success','Data Berhasil Di Hapus');
			redirect('index.php/back/dashboard/about');

		} catch (Exception $e) {
			$this->session->set_flashdata('result_error',$e);
        	redirect('index.php/back/dashboard/about');
		}
	}
	function default($id)
	{
		try {
			$this->m_controllroom->setdefault($id);
			$this->m_controllroom->Rollback($id);
			$this->session->set_flashdata('result_success','Data Berhasil Di Hapus');
			redirect('index.php/back/dashboard/about');

		} catch (Exception $e) {
			$this->session->set_flashdata('result_error',$e);
        	redirect('index.php/back/dashboard/about');
		}
	}
}
?>