<?php

namespace Prophetz\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProphetzUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
