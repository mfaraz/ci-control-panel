<?
/**
 * Class Template()
 *
 * @package     MyPanel 
 *
 * @author      Ruben Giancarlo Elmo
 * @link        http://www.mypanel.com
 */
class Template
{
    /**
     * Method build_template()
     * Build template
     *
     * @package     MyPanel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mypanel.com
     */
    function build_template()
    {
        $local_CI =& get_instance();
        
        global $template;


        if($local_CI->uri->segment(1) == 'admin' && $local_CI->uri->segment(2) != 'login' && $local_CI->uri->segment(2) != 'register' && $local_CI->uri->segment(2) != 'help' && strpos($local_CI->uri->segment(3), 'ajax') === FALSE)
            	$local_CI->load->view('back-end/layout', $template);
            
        if($local_CI->uri->segment(1) != 'admin')
            $local_CI->load->view('front-end/layout', $template);

    }
}