<?php

function controller_template($class_name) {
    $project_name = "UNIBIZ";
    
    $output = '<?php ' . NEW_LINE . NEW_LINE;
    $output .= "/////////////////////////////////////////////////////////////////////////////";
    $output .= NEW_LINE . NEW_LINE;
    $output .= "/*";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * PROJECT          : " . $project_name;
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * MODULE           : N/A";
    $output .= NEW_LINE . NEW_LINE;
    $output .= " * APPLICATION      : " . strtoupper($class_name) . " CONTROLLER";
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
    $output .= 'class ' . $class_name . '_ctrl extends CI_Controller {' . NEW_LINE . NEW_LINE;
    $output .= '    public function __construct() {' . NEW_LINE . NEW_LINE;
    $output .= '        parent::__construct();' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function index() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function add() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function edit() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '    public function delete() {' . NEW_LINE . NEW_LINE;
    $output .= '    }' . NEW_LINE . NEW_LINE;
    $output .= '}' . NEW_LINE . NEW_LINE;
    
    return $output;
}