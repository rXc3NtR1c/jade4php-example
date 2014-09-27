<?php
/**
 * A simple template class
 */
class Template {
    
    private $vars = []; /// Holds all the template variables

    /**
     * Set a template variable.
     */
    public function assign($name, $value) {
        $this->vars[$name] = $value;
    }

    /**
     * Open, parse, and return the template file.
     *
     * @param $file string the template file name
     */
    public function fetch($file) {
        extract($this->vars);          // Extract the vars to local namespace
        ob_start();                    // Start output buffering
        include($file);                // Include the file
        $contents = ob_get_contents(); // Get the contents of the buffer
        ob_end_clean();                // End buffering and discard
        return $contents;              // Return the contents
    }
    
    public function display($file) {
        echo $this->fetch($file);
    }
}
