<?php
/**
 * @author VIET PHAM THANH
 */

class MasterAutoViewHook
{
    public function run()
    {
        global $class, $method;

        $CI = &get_instance();
        $template_file = $CI->load->get_var('template_file');
        if (!$template_file) {
            $template_file = "{$class}/{$method}";
        }

        $master_template = defined('MASTER_TPL') ? MASTER_TPL : 'master.php';

        if ($CI->output->get_output() == '' && file_exists(APPPATH . 'views/' . $template_file . '.php')) {
            $view_content = $CI->load->view($template_file, array(), TRUE);
            $CI->load->view($master_template, compact('view_content'));
        }
    }
}
