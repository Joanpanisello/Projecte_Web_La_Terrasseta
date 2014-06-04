<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jsoncontrol extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function oferta()
	{
		$this->load->model('jsonmodel');
		$data['json'] = $this->jsonmodel->getoferta();
		if (!$data['json']) show_404();
        if (!$data['json']) echo "";
        else $this->load->view('jsonvista', $data);
	}

	public function fotooferta($titol)
	{	
		$this->load->model('jsonmodel');
		$data['json'] = $this->jsonmodel->getfotooferta($titol);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
	}	

	public function evento()
	{	
		$this->load->model('jsonmodel');
		$data['json'] = $this->jsonmodel->getevento();
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
	}	

	public function fechaevento($id)
	{
		$this->load->model('jsonmodel');	
		$data['json'] = $this->jsonmodel->getfechaevento($id);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
    }

	public function horainicioevento($id)
	{
		$this->load->model('jsonmodel');	
		$data['json'] = $this->jsonmodel->gethorainicioevento($id);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
    }

	public function horafinalevento($id)
	{
		$this->load->model('jsonmodel');	
		$data['json'] = $this->jsonmodel->gethorafinalevento($id);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
    }
    
    public function lugarevento($id)
	{
		$this->load->model('jsonmodel');	
		$data['json'] = $this->jsonmodel->getlugarevento($id);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
    }
    
    public function direccionevento($id)
	{
		$this->load->model('jsonmodel');	
		$data['json'] = $this->jsonmodel->getdireccionevento($id);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
    }
    
	public function fotoevento($titol)
	{
		$this->load->model('jsonmodel');
		$data['json'] = $this->jsonmodel->getfotoevento($titol);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
	}

	public function album()
	{
		$this->load->model('jsonmodel');
		$data['json'] = $this->jsonmodel->getalbum();
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
	}

	public function fotosalbum($id)
	{
		$this->load->model('jsonmodel');
		$data['json'] = $this->jsonmodel->getfotosalbum($id);
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
	}

	public function videos()
	{
		$this->load->model('jsonmodel');
		$data['json'] = $this->jsonmodel->getvideos();
		if (!$data['json']) echo "";
		else $this->load->view('jsonvista', $data);
	}
}

