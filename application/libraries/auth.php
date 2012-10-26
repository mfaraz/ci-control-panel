<?php

/**
 * Class Auth()
 *
 * @package     ci-control-panel 
 *
 * @author      Ruben Giancarlo Elmo
 * @link        http://www.mantisworks.net
 */
class Auth
{
    var $CI;
    var $user_table = 'us_user';
    
    /**
     * Method login()
     * Method for login system.
     *
     * @package     ci-control-panel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function login($email = NULL, $password = NULL, $administrator = FALSE)
    {
        if( !$email || !$password)
        {
            return FALSE;
        }
        
        $this->CI =& get_instance();
        
        if($administrator)
        	$this->CI->db->where('typeID >', 1);
        	
        $this->CI->db->where('email', $email);
        $this->CI->db->where('enable', 1); 
        
        $query = $this->CI->db->get($this->user_table);
        
        if ($query->num_rows() > 0)
        {
            $row = $query->row_array(); 
            
            if(md5($password) != $row['password'])
            {
                return FALSE;
            }
            
            $this->CI->session->sess_destroy();
            $this->CI->session->sess_create();
            
            unset($row['password']);
            
            $this->CI->session->set_userdata($row);
				
            $this->CI->db->where('email', $email);
            $this->CI->db->where('password', md5($password));
            $this->CI->db->update($this->user_table, array('accesstime' => date("Y-m-d H:m:s")));
            
            return TRUE;
        } else {
            return FALSE;
        }
        
    }
    
    /**
     * Method logout()
     * Method for session destroy.
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
        $this->CI =& get_instance();        
        $this->CI->session->sess_destroy();
    }
}