<?php

class Autoloader
{
    public static function Register()
    {
        spl_autoload_register(function ($className) {
            // Define an array of directories to search for class files
            $paths = ["", "config/", "controllers/", "core/", "core/interfaces/", "models/", "views/"];
            
            // Loop through each directory
            foreach ($paths as $dir) {
                // Build the file path for the class
                $file = $dir . $className . '.php';
                
                // If the file exists, require it and break the loop
                if (file_exists($file)) {
                    require $file;
                    break;
                }
            }
        });
        
        echo "AutoLoader running.";  // Useful for debugging
    }
}

?>