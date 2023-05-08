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
			
			case 'stretchy':
			case 'symmetric':
			case 'largeop':
			case 'movablelimits':
				return in_array(strtolower($value), array('true','false'));
				break;

			case 'fence':
			case 'lspace':
			case 'maxsize':
			case 'minsize':
			case 'rspace':
			case 'separator':
				return true; /* TODO */
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