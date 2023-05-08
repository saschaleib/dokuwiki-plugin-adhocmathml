<?php
/**
 * Math Padding element for the Ad-Hoc MathML plugin
 *
 * Defines  <mpadded> ... </mpadded> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mpadded
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mpadded extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mpadded';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <mpadded> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'width':
			case 'height':
			case 'depth':
			case 'lspace':
			case 'voffset':
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