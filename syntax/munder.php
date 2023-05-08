<?php
/**
 * Math Underscript element for the Ad-Hoc MathML plugin
 *
 * Defines  <munder> ... </munder> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/munder
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_munder extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'munder';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <munder> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'accent':
			case 'accentunder':
				return in_array(strtolower($value), array('true','false'));
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