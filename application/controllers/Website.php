<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
	    /*sirve para cargar una vista*/
		$this->load->view('puntoventa');
	}
	public function perfil()
	{
	    /*sirve para cargar una vista*/
		$this->load->view('perfil');
	}
	public function editar_perfil()
	{
	    /*sirve para cargar una vista*/
		$this->load->view('editar_perfil');
	}
}
