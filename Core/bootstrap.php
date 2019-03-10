<?php

if (!file_exists(AUTOLOAD_FILE)) {
	throw new RuntimeException(
		sprintf('autoload file bould not be loaded in [%s]', AUTOLOAD_FILE)
	);
}

require_once(AUTOLOAD_FILE);