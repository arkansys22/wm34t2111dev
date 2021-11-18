<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wmeat extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function index()
  {

		$data['status']   = 'active';
    $this->load->view('fronts/wmeat2', $data);
  }




  public function detail($id)
	{

			$config['per_page'] = 4;
			$row = $this->Crud_m->get_by_id_post($id,'blogs_id','blogs','blogs_judul_seo');
			if ($this->uri->segment('4')==''){
				$dari = 0;
				}else{
					$dari = $this->uri->segment('4');
			}
			if ($row)
				{
          $data['posts_note'] = $this->Crud_m->view_where_order('note',array('note_status'=>'publish'),'note_id','asc');
          $data['posts_produk'] = $this->Crud_m->view_where_order_limit('templates',array('templates_status'=>'publish'),'templates_id','desc',$dari,'5');
          $data['posts_blogs'] = $this->Crud_m->view_where_order('blogs',array('blogs_status'=>'publish'),'blogs_id','desc');
          $data['posts_templates_category']= $this->Crud_m->view_one_limit('templates_category','templates_cat_status','templates_cat_id','ASC',$dari,'10');
          $data['menu'] = 'berita';
					$data['posts']            = $this->Crud_m->get_by_id_post($id,'blogs_id','blogs','blogs_judul_seo');
					$this->add_count_blogs($id);
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
          $this->load->view('fronts/beritas/v_detail', $data);
				}
				else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>Blogs tidak ditemukan</b></div>');
							redirect(base_url());
						}
	}

  function add_count_blogs($id)
	{
			$check_visitor = $this->input->cookie(urldecode($id), FALSE);
			$ip = $this->input->ip_address();
			if ($check_visitor == false) {
					$cookie = array(
            "name" => urldecode($id),
            "value" => "$ip",
            "expire" => 3600,
            "secure" => false);
					$this->input->set_cookie($cookie);
					$this->Crud_m->update_counter(urldecode($id),'blogs','blogs_judul_seo','blogs_dibaca');
			}
	}


}
