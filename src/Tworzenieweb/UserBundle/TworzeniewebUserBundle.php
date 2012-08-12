<?php

namespace Tworzenieweb\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TworzeniewebUserBundle extends Bundle
{
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
