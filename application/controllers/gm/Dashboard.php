<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public	function __construct()
	{
		parent::__construct();

		if($this->session->userdata('status') != "login")
		{
			$this->session->set_flashdata('pesan','
				<div class="mx-auto alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 3rem; max-width: 25rem;">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			  		Anda harus login terlebih dahulu !
				</div>
			');
			redirect(base_url());
		}
	}

	public function index()
	{
		$comp = array(
			"content" => $this->load->view('gm/dashboard',array(
				'nama' => $this->session->userdata('nama'),
			),true),
			"footer" => $this->load->view('footer',array(),true)
		);
		$this->load->view('index', $comp);
	}
}