<?php   
  class jsonmodel extends CI_Model  
  {   

    function getoferta()     
    { 
       $this->db->select('post_title as titol');
       $this->db->select('post_content as contingut');
       $this->db->from('wp_posts');
       $this->db->where('post_type', 'post');
       $this->db->where('post_status', 'publish');
       $result = $this->db->get();

       return $result->result();
    }  

    function getfotooferta($titol)     
    { 
       $this->db->select('guid as url');
       $this->db->from('wp_posts');
       $this->db->like('post_title', $titol);
       $this->db->where('post_type', 'attachment');
       $result = $this->db->get();

       return $result->result();
    }  

    function getevento()     
    { 
       $this->db->select('a.post_title as titol');
       $this->db->select('a.post_content as contingut');
       $this->db->select('a.ID as id');
       $this->db->select('b.meta_value as fecha');
       $this->db->from('wp_posts AS a');
       $this->db->join('wp_postmeta AS b', 'b.post_id = a.ID');
       $this->db->where('a.post_type', 'event');
       $this->db->where('a.post_status', 'publish');
       $this->db->where('b.meta_key', 'event_date_interval');
       $result = $this->db->get();

       return $result->result();
    } 
    
   /* function getfechaevento($id){
		
		$this->db->select('meta_value as fecha');
		$this->db->from('wp_postmeta');
		$this->db->where('meta_key', 'event_date_interval');
		$this->db->where('post_id', $id);
		$result = $this->db->get();

       return $result->result();
	}	*/
	
	function gethorainicioevento($id){
		
		$this->db->select('meta_value as inicio');
		$this->db->from('wp_postmeta');
		$this->db->where('meta_key', 'event_tstart');
		$this->db->where('post_id', $id);
		$result = $this->db->get();

       return $result->result();
	}
	
	function gethorafinalevento($id){
		
		$this->db->select('meta_value as final');
		$this->db->from('wp_postmeta');
		$this->db->where('meta_key', 'event_tend');
		$this->db->where('post_id', $id);
		$result = $this->db->get();

       return $result->result();
	}
	
	function getlugarevento($id){
		
		$this->db->select('meta_value as lugar');
		$this->db->from('wp_postmeta');
		$this->db->where('meta_key', 'event_venue');
		$this->db->where('post_id', $id);
		$result = $this->db->get();

       return $result->result();
	}
	
	function getdireccionevento($id){
		
		$this->db->select('meta_value as direccion');
		$this->db->from('wp_postmeta');
		$this->db->where('meta_key', 'event_location');
		$this->db->where('post_id', $id);
		$result = $this->db->get();

       return $result->result();
	}

    function getfotoevento($titol)     
    { 
       $this->db->select('guid as url');
       $this->db->from('wp_posts');
       $this->db->like('post_mime_type', 'image');
       $this->db->like('post_title', $titol);
       $result = $this->db->get();

       return $result->result();
    } 

    function getalbum()
    {
       $this->db->select('ID');
       $this->db->select('post_title as titol');
       $this->db->from('wp_posts');
       $this->db->where('post_type', 'photo');
       $this->db->where('post_status', 'publish');
       $result = $this->db->get();

       return $result->result();
    }

    function getfotosalbum($id)
    {
       $this->db->select('guid as url');
       $this->db->from('wp_posts');
       $this->db->like('post_mime_type', 'image');
       $this->db->where('post_parent', $id);
       $result = $this->db->get();

       return $result->result();
    }

    function getvideos()
    {
       $this->db->select('a.post_title as titol');
       $this->db->select('b.meta_value as url');
       $this->db->from('wp_posts AS a');
       $this->db->join('wp_postmeta AS b', 'b.post_id = a.ID');
       $this->db->where('a.post_type', 'video');
       $this->db->where('a.post_status', 'publish');
       $this->db->where('b.meta_key', 'video_link');
       $result = $this->db->get();

       return $result->result();
    }

  }
