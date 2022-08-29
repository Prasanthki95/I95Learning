<?php

namespace I95Learning\Proxies\Model;

class SlowLoading
{
    public function __construct()
    {
        echo "Slowloading";
    }

    public function getValue()
    {
        return 'SlowLoading value';
    }
}


