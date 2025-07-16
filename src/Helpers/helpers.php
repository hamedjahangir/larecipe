<?php

if (! function_exists('larecipe_assets')) {
    function larecipe_assets($path, $secure = null)
    {
        return asset('larecipe/assets/'.$path, $secure);
    }
}
