<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Classe Users()
 *
 * @package         ci-control-panel 
 *
 * @author          Ruben Giancarlo Elmo
 * @link            http://www.mantisworks.net
 */
class Users extends CI_Controller 
{
	/**
     * Metodo index()
     * Main method. Used for Dashboard page
     *
     * @package     ci-control-panel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function index()
    {
    	$tmpl = array ( 'table_open'  => '<table width="100%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">' );
        $this->table->set_template($tmpl);
        
	    $this->table->set_heading('Name', 'Surname', 'Level', 'Enable', 'Manage');
	    foreach($this->user_model->search($this->input->post('search'), 100000) as $c)
        {
			$this->table->add_row(
				$c->name, 
				$c->surname, 
				$c->level, 
				($c->enable)?'<span class="green">Yes</span>':'<span class="red">No</span>',
				anchor("admin/utenti/utente/{$c->ID}", "Modify", ' class="button greyishBtn" ')." ". 
				anchor("admin/utenti/elimina_utente/{$c->ID}", "Delete", ' class="button red redBtn" '));
        }
        
        $data['result'] = $this->table->generate();
	    
    	set_content('dashboard', $data);
    }
    
    /**
     * Method avatar()
     * Return resized image
     *
     * @package     MyPanel
     * @param       integer $userID
     * @param       integer $w
     * @param       integer $h
     * @param       string $filename
     * @return		Resized and cropped image
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function avatar($userID = 0, $w = 100, $h = 100, $filename = 'default.jpg')
    {
    	$filename = $_SERVER['DOCUMENT_ROOT']."/uploads/users/{$userID}/avatar/{$filename}";

        if(!file_exists($filename))
            $filename = $_SERVER['DOCUMENT_ROOT']."/uploads/users/default.jpg";

        $this->load->library('image_moo');
        
        $this->image_moo->load($filename)
        	->resize_crop($w,$h)
        	->save_dynamic();
    }
}