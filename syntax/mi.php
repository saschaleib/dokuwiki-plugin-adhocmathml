<?php
/**
 * Math Identifier component for the Ad Hoc MathML plugin
 *
 * Defines  <mi> ... </mi> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mi
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mi extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mi';

	/* no specific attributes */

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