<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('login');
	}

	public function do_login()
	{
		$this->load->model('akun_model');
		$this->load->model('kerja_model');

		$nip = $this->input->post('nip');
		$password = $this->input->post('password');

		$where = array('nip' => $nip);

		$cek = $this->akun_model->login($where);

		if ($cek->num_rows() == 1) 
		{
			$akun_data = $this->akun_model->get_data(" where nip ='$nip'");

			foreach ($akun_data as $key => $akun)
			{
				if ($this->bcrypt->check_password($password, $akun['password']))
				{
					$data_session['status'] = 'login';
					$data_session['nip'] = $akun['nip'];
					$this->session->set_userdata($data_session);
					
					$kerja_data = $this->kerja_model->get_data(" where nip ='$akun[nip]'");

					foreach ($kerja_data as $key => $kerja) {
						if ($kerja['posisi'] == 'staf' || $kerja['posisi'] == 'asman') {
							redirect(base_url('staf/dashboard'));
						} elseif ($kerja['posisi'] == 'manajer') {
							redirect(base_url('manajer/dashboard'));
						} elseif ($kerja['posisi'] == 'gm' || $kerja['posisi'] == 'sm') {
							redirect(base_url('gm/dashboard'));
						} elseif ($kerja['posisi'] == 'direktur' || $kerja['posisi'] == 'direktur') {
							redirect(base_url('direktur/dashboard'));
						} elseif ($kerja['posisi'] == 'hrd') {
							redirect(base_url('hrd/dashboard'));
						} else {
							$this->session->set_flashdata('pesan','
								<div class="mx-auto alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 3rem; max-width: 25rem;">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
							  		1
								</div>
							');
							redirect(base_url());
						}
					}
				} else
				{
					$this->session->set_flashdata('pesan','
						<div class="mx-auto alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 3rem; max-width: 25rem;">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					  		2
						</div>
					');
					redirect(base_url());
				}
			}
		} else
		{
			$this->session->set_flashdata('pesan','
				<div class="mx-auto alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 3rem; max-width: 25rem;">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			  		3
				</div>
			');
			redirect(base_url());
		}
	}

	public function do_logout()
	{
		$this->session->unset_userdata('nip');
		$this->session->sess_destroy();
		redirect(base_url());
	}
}