<?php
/**
 * Math Presubscripts and tensor notations element for the Ad-Hoc MathML plugin
 *
 * Defines  <mmultiscripts> ... </mmultiscripts> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mmultiscripts
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mmultiscripts extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mmultiscripts';

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