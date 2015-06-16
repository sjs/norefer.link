<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(0);

require_once('lib/glue.php');
require_once('lib/Savant3-3.0.1/Savant3.php');



$urls = array(
    '/$'                        => 'index',
    '/(?P<url>http(s)?://.*)'   => 'redirect',
);

class index {
    function GET() {

        $tpl = new Savant3();
        $tpl->display('view/index.tpl.php');

    }
}

class redirect {
    function GET($matches) {

        header('HTTP/1.1 301 Moved Permanently'); 
        header('Location: '.$matches['url']);  

    }
}

try {
    glue::stick($urls);
}
catch(UnexpectedValueException $e) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: http://norefer.link');
}
catch(InvalidArgumentException $e) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: http://norefer.link');
}
