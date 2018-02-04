<?php
function model_template($class_name) {
    global $project_name;
    
    $output = "<?php " . NEW_LINE;
    $output .= "/////////////////////////////////////////////////////////////////////////////";
    $output .= NEW_LINE . NEW_LINE;
    $output .= "/*";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * PROJECT          : " . strtoupper($project_name);
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * MODULE           : N/A";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * APPLICATION      : " . strtoupper($class_name) . " MODEL";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * AUTHOR           : KUNDAN KUMAR";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * CONTRIBUTORS     : VINAY KUMAR SHARMA";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * VERSION          : 1.0";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * LICENSE          : MIT LICENSE";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * COPYRIGHT        : COPYRIGHT (c) " . date('Y') . " ETHANE TECHNOLOGIES PVT. LTD.";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " */";
    $output .= NEW_LINE . NEW_LINE;
    $output .= "/////////////////////////////////////////////////////////////////////////////";
    $output .= NEW_LINE . NEW_LINE;
    $output .= 'class ' . $class_name . '_mdl extends CI_Model {' . NEW_LINE . NEW_LINE;
    $output .= '    public function __construct() {' . NEW_LINE . NEW_LINE;
    $output .= '        parent::__construct();' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function get_' . $class_name .  's() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function get_total_' . $class_name .  's() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function add() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function update() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function delete() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '}' . NEW_LINE . NEW_LINE;
    
    return $output;
}