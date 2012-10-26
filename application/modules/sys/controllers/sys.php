<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Classe System()
 *
 * @package         ci-control-panel 
 *
 * @author          Ruben Giancarlo Elmo
 * @link            http://www.mantisworks.net
 */
class Sys extends CI_Controller 
{
	/**
     * Metodo dashboard()
     * Main method. Used for Dashboard page
     *
     * @package     ci-control-panel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function dashboard()
    {
    	set_content('dashboard', NULL);
    }	

	/**
     * Method login()
     * Login to the admin area
     *
     * @package     ci-control-panel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function login()
    {
	    $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        } else {
            if( !$this->auth->login($_POST['email'], $_POST['password'], TRUE))
            	redirect('admin/login');
            	
            redirect('admin/dashboard');
        }
    }
    
    /**
     * Method logout()
     * Logout from the admin area
     *
     * @package     ci-control-panel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function logout()
    {
        $this->auth->logout();
        redirect('admin/login');
    }
}