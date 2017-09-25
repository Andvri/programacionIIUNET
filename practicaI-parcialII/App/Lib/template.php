<?php
namespace App\Lib;
class Template {
    protected $folder;
    protected $values = array();
  
    public function __construct($folder = null) {
        if($folder){
            $this->setFolder( $folder );
        }     
    }
    public function setFolder($folder){
        $this->folder = $this->folder = rtrim( $folder, '/' );
    }
    public function render( $templateNames, $variables = array() ){
		$template = $this->find_template( $templateNames );
		$output = '';
		if ( $template ){
            $output = $this->render_template( $template, $variables );
            $output = $this->remplace_tags($output, $variables);
        }
		return $output;
    }

    private function find_template( $templateNames ){
		if ( !is_array( $templateNames ) ) {
			$templateNames = array( $templateNames );
		}
		$templateNames = array_reverse( $templateNames );
		$found = false;
		foreach( $templateNames as $templateName ){
			$file = "{$this->folder}/{$templateName}.tem.php";
			if ( file_exists( $file ) ){
				$found = $file;
				break;
			}
		}
		return $found;
    }
    

    private function render_template($template, $variables){
        ob_start();
        foreach ( $variables as $key => $value) {
			${$key} = $value;
        }
        
		include $template;
		return ob_get_clean();
    }
      
    private function remplace_tags($output, $variables) {
      
        foreach ($variables as $key => $value) {
            $tagToReplace = "[@$key]";
            $output = str_replace($tagToReplace, $value, $output);
        }
      
        return $output;
    }
}

?>