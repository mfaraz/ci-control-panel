<? if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('set_content'))
{
    function set_content($page = null, $data = null)
    {
        $CI = & get_instance();
        global $template;
        
        $template['modules'] = get_modules();
        $template['module_content'] = $CI->load->view($page, $data, true);
    }
}

if(!function_exists('get_modules'))
{
    function get_modules()
    {
		$CI = & get_instance();
        
		$CI->db->where('enable', 1);
		$CI->db->order_by('position');
		$modules = $CI->db->get('mp_module');
		
		$output = array();
		
		if($modules->num_rows() > 0)
		{
			foreach($modules->result() as $m)
			{
				$mod = new stdClass();
				
				$mod->module 		= $m->module;
				$mod->controller	= $m->main_controller;
				$mod->class 		= $m->cssClass;
				$mod->active 		= ($CI->uri->segment(2) == $m->main_controller)?' active':'';
				
				$output[] = $mod;
			}
		}
		
		return $output;
    }
}