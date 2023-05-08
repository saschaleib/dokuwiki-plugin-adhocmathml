<?php
/**
 * Math Semantics element for the Ad-Hoc MathML plugin
 *
 * Defines  <semantics> ... </semantics> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/semantics
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_semantics extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'semantics';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <semantics> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			case 'encoding':
				return true; /* TODO! */
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