<?php
spl_autoload_register(function (string $className) {
    $directoryPathway = str_replace('GabsDSousa\\Bank', 'src', $className);
    $directoryPathway = str_replace('\\', DIRECTORY_SEPARATOR, $directoryPathway);
    $directoryPathway .= '.php';

    if (file_exists($directoryPathway)) {
        require_once $directoryPathway;
    }
});
