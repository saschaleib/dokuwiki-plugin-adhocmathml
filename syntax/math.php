<?php
/**
 * Form component for the Ad Hoc MathML plugin
 *
 * Defines  <math> ... </math> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/math
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_math extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'math';

	/* allow link attributes: */
	protected function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <math> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'display':
				return in_array(strtolower($value), array('block','inline'));
				break;

			case 'alttext':
				return true;
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