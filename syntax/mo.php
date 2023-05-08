<?php
/**
 * Math Operator component for the Ad Hoc MathML plugin
 *
 * Defines  <mo> ... </mo> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mo
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mo extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mo';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <mo> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'fence':
			case 'largeop':
			case 'movablelimits':
			case 'separator':
			case 'stretchy':
			case 'symmetric':
				return in_array(strtolower($value), array('true','false'));
				break;

			case 'lspace':
			case 'maxsize':
			case 'minsize':
			case 'rspace':  /* length-percentages */
				return preg_match('/^[\w\d\%]+$/', trim($value));
				break;

			default:
				return false;
		}
	}


    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		//$renderer->table_open();
    }
    function renderODTElementClose($renderer, $element) {
		//$renderer->table_close();
    }
}