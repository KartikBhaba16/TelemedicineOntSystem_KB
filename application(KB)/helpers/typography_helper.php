<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('nl2br_except_pre'))
{
	function nl2br_except_pre($str)
	{
		$CI =& get_instance();

		$CI->load->library('typography');

		return $CI->typography->nl2br_except_pre($str);
	}
}

// ------------------------------------------------------------------------

/**
 * Auto Typography Wrapper Function
 *
 *
 * @access	public
 * @param	string
 * @param	bool	whether to allow javascript event handlers
 * @param	bool	whether to reduce multiple instances of double newlines to two
 * @return	string
 */
if ( ! function_exists('auto_typography'))
{
	function auto_typography($str, $strip_js_event_handlers = TRUE, $reduce_linebreaks = FALSE)
	{
		$CI =& get_instance();
		$CI->load->library('typography');
		return $CI->typography->auto_typography($str, $strip_js_event_handlers, $reduce_linebreaks);
	}
}


// --------------------------------------------------------------------

/**
 * HTML Entities Decode
 *
 * This function is a replacement for html_entity_decode()
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('entity_decode'))
{
	function entity_decode($str, $charset='UTF-8')
	{
		global $SEC;
		return $SEC->entity_decode($str, $charset);
	}
}

/* End of file typography_helper.php */
/* Location: ./system/helpers/typography_helper.php */