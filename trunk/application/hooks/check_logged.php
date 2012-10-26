<?
/**
 * Class Logged()
 *
 * @package     ci-control-panel
 *
 * @author      Ruben Giancarlo Elmo
 * @link        http://www.mantisworks.net
 */
class Logged
{
	/**
     * Metodo check()
     * Check user logged
     *
     * @package     ci-control-panel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    function check()
    {
        $local_CI =& get_instance();
       
        if( ((!$local_CI->session->userdata('typeID') || $local_CI->session->userdata('typeID')=='1') && $local_CI->uri->segment(2)!='login') && $local_CI->uri->segment(1)=='admin') 
        {
        	redirect("admin/login");
        }
        
        // Error tag delimiter for entire control panel
        $local_CI->form_validation->set_error_delimiters('<div class="nNote nFailure hideit"><p><strong>ERROR</strong>: ', '</p></div>');
        
        // Load module models
        $list 		= array();
        $forbidden 	= array(".", "..", ".svn");
        
        /* BACK-END or FRONT-END? */
        $current_module = ($local_CI->uri->segment(1) == 'admin') ? $local_CI->uri->segment(2) : $local_CI->uri->segment(1);
        
        $path = $_SERVER['DOCUMENT_ROOT']."/application/modules/".$current_module."/models";
        
        /* Dir list */
        if(is_dir($path))
        {
            foreach(scandir($path) as $file)
            {
                if('php')
                {
                    if(!in_array($file, $forbidden) && (pathinfo($file, PATHINFO_EXTENSION) == 'php'))
                        $list[] = strtolower(substr($file, 0,strrpos($file,'.')));
                }
                else
                {
                    if(!in_array($file, $forbidden))
                        $list[] = strtolower(substr($file, 0,strrpos($file,'.')));
                }
            }
        }
       
        /* Load all models */
        foreach($list as $f)
            $local_CI->load->model("{$current_module}/{$f}");

        /* Load config fie: module.php */
		if(file_exists($_SERVER['DOCUMENT_ROOT']."/".APPPATH."modules/".$current_module."/config/module.php"))
        {
            $local_CI->config->load('module', TRUE);
            
            $errors = 0;
            foreach($local_CI->config->config['module']['table'] as $t)
            {
                if(!$local_CI->db->table_exists($t))
                    $errors++;
            }
            
            /* If errors install module */
            if($errors)
            {
                redirect(base_url("admin/sys/install/{$local_CI->uri->segment(2)}"));
            }
            
        }
    }
}