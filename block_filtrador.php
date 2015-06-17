<?php
require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->dirroot.'/local/proyecto/buscador.php');
class block_filtrador extends block_base {
	// Funcion que inicializa el bloque
	function init() {
		$this->title ='Filtrador';
		$this->version = 2015061700;
	}
	public function filtrador(){
		$nodo=navigation_node::create('filtrador',
				new moodle_url("/local/filtrador/index.php"),
				navigation_node::TYPE_CUSTOM,null, null,
				new pix_icon ('i/report','filtracion')); //url
		
		return $nodo;
	}
	// Función que genera el contenido del bloque
	function get_content() {
		// variables globales de moodle
		global $OUTPUT, $USER, $CFG, $DB, $PAGE, $COURSE;

		//verifica si el bloque esta cargado en el curso
		if ($this->content !== NULL) {
			return $this->content;
			}
			$boton= $OUTPUT->single_button(new moodle_url('../local/proyecto/index.php'), 'ir');
			$this-> content = new stdClass;
			$this->content->text = $boton;
			$this->content->footer= 'eseeerea';
			 
		//$root = navigation_node::create( "Fitro", null, navigation_node::TYPE_ROOTNODE,null,null);
		//if ($nodo = $this->filtrador ())
		//	$root = add_node($nodo);
		
		//$renderer = $this->page->get_renderer('filtrador');
		//$this->content->text = $renderer->
		return $this->content;
	}
}
			//$form = new textbox ();
		//$this->content = new stdClass;
		//$this->content->text = $form-> display();
		//$this->content->footer= ' ';
		
		//return $this->content;

		// Condición que solo permite que el bloque sea visible dentro de un curso, de lo contrario no muestra nada
		//$course = $PAGE->course;
		//echo 'hola';
		
			//return false;
		//else{
			// Cuando se esta dentro de un curso se carga todo el contenido del bloque
			//$this->content = new stdClass;
			// Con las tablas y los botones listos, estos se concatenan y se asignan como contenido del bloque
			//$form = new textbox();
			//$this->content->text = $form->display();
			//$this->content->footer = "";

			//return $this->content;
		//}
			
//	}
		
//}