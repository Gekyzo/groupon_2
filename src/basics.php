<?php

if (!function_exists('dedie')) {
    function dedie($var, $showHTML = null, $showFrom = true)
    {
        debug($var, $showHTML, $showFrom);
        die;
    }
}
