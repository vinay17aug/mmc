<?php

require_once 'autoload.php';
jarvis_start();

fq("DO YOU WANT TO CREATE PROJECT [Y|N] ?");

$fr = fr();

if($fr == "Y" || $fr == "y") {
    
    fq("WHAT IS THE NAME OF YOUR PROJECT ?");
    
    // RECEIVE THE PROJECT NAME
    $project_name = fr();
    
    fw("I READY TO WORK ON $project_name");
    
    fq("WHAT DO YOU WANT TO DO FIRST [C|M|V|MVC] <ELEMENT NAME> -[C|D] ?");
    
    // RECEIVE CREATE REQUEST
    $argument = explode(" ", fr());
    
    $base_dir = dirname(dirname(__FILE__));
    $model_base_dir = $base_dir . '/' . 'application/models';
    $view_base_dir = $base_dir . '/' . 'application/views';
    $controller_base_dir = $base_dir . '/' . 'application/controllers';
    $library_base_dir = $base_dir . '/' . 'application/libraries';
    $language_base_dir = $base_dir . '/' . 'application/language';
    $helper_base_dir = $base_dir . '/' . 'application/helpers';
    $hook_base_dir = $base_dir . '/' . 'application/hooks';
    
    if($argument[0] == 'm') {
        // CREATE MODEL
        if($argument[2] == '-c') {
            create_php_file(
                $model_base_dir . '/' . proper_mdl_name($argument[1]),
                model_template($argument[1])
            );
            
            fgr("CREATED");
        }
        
        // DELETE MODEL
        if($argument[2] == '-d') {
            delete_php_file($model_base_dir . '/' . proper_mdl_name($argument[1]));
        }
    }
    
    if($argument[0] == 'v') {
        // create view
        
    }
    
    if($argument[0] == 'c') {
        // create controller
        
        if($argument[2] == '-c') {
            create_php_file(
                $controller_base_dir . '/' . proper_ctrl_name($argument[1]),
                controller_template($argument[1])
            );
        }
        
        if($argument[2] == '-d') {
            delete_php_file($controller_base_dir . '/' . proper_ctrl_name($argument[1]));
        }
    }
    
    if($argument[0] == 'p') {
        // create project
        exec("robocopy " . $base_dir . " " . dirname($base_dir) . "/" . $argument[1] . " -s");
        exec("cd " . dirname($base_dir) . "\\" . $argument[1] . "\\cbuild");
    }
    
    if($argument[0] == 'lb') {
        // create library
    }
    
    if($argument[0] == 'lg') {
        
        // create language
        
    }
    
    if($argument[0] == 'hp') {
        // create helper
        
    }
    
    if($argument[0] == 'hk') {
        // create helper
        
    }
    
    if($argument[0] == 'mvc') {
        //create model
        //create view
        //create controller
    }
} else {
    fw("GOOD BYE!");
    exit();
}

function create_php_file($file_name, $data_string = '') {
    $fp = fopen($file_name . '.php', 'w');
    fwrite($fp, $data_string);
    fclose($fp);
}

function proper_mdl_name($input) {
    return ucfirst($input) . '_mdl';
}

function proper_ctrl_name($input) {
    return ucfirst($input) . '_ctrl';
}

function delete_php_file($file_name) {
    
    if(!file_exists($file_name . '.php')) {
        echo "Error: File Not Exists!"; exit;
    }
    
    if (!unlink($file_name . '.php')) {
        echo ("Error deleting $file_name");
    } else {
        echo ("Deleted $file_name");
    }
}







