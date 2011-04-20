<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Heelp_acc {

	var $name		= 'Heelp!';
	var $id			= 'heelp';
	var $version		= '1.0';
	var $description	= 'Provide instructions to clients on the channel publish pages.';
	var $sections		= array();

	/**
	 * Constructor
	 */
	function __construct()
	{
		$this->EE =& get_instance();
	}
	
	/**
	 * Set Sections
	 *
	 * Set content for the accessory
	 *
	 * @access	public
	 * @return	void
	 */
	function set_sections()
	{
	  
	  if($_GET['C'] == 'content_publish')
	  {
	    $channel_id = $this->EE->input->get('channel_id');
  	  if( isset($channel_id) && @file_exists(APPPATH . 'third_party/heelp/views/channel_' . $channel_id . '.php') )
  	  {
  	    $this->sections['Helpful Hints'] = $this->EE->load->view('channel_' . $channel_id, NULL, TRUE);  
  	  }
	  }
	  
	}
	
}
// END CLASS