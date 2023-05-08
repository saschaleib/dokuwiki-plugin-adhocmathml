<?php
/**
 * Space element for the Ad Hoc MathML plugin
 *
 * Defines  <mspace> ... </mspace> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mspace
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mspace extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mspace';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <mspace> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'width':
			case 'height':
			case 'depth':  /* length-percentages */
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