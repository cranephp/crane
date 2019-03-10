<?php

/**
* @property $rootDirectory
* 
* The project's root directory.
*/
$rootDirectory = realpath(dirname(__DIR__));

/**
* Define directories constants that will be available
* through out the project.
*/
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIRECTORY', $rootDirectory);
define('COMMON_DIRECTORY', ROOT_DIRECTORY . DS . 'Common' . DS);
define('PUBLIC_DIRECTORY', ROOT_DIRECTORY . DS . 'Public' . DS);
define('CORE_DIRECTORY', ROOT_DIRECTORY . DS . 'Core' . DS);

/**
* Define bootstrap and autoload file
*/
define('BOOT_FILE', CORE_DIRECTORY . 'bootstrap.php');
define('AUTOLOAD_FILE', CORE_DIRECTORY . 'vendor' . DS . 'autoload.php');

/**
* Load the bootstrap file here.
*/
if (!file_exists(BOOT_FILE)) {
	throw new RuntimeException(
		sprintf('Bootstrap file could not be loaded from [%s]', BOOT_FILE)
	);
}

require BOOT_FILE;