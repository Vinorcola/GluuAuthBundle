<?php

namespace Vinorcola\GluuAuthBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Vinorcola\GluuAuthBundle\DependencyInjection\VinorcolaGluuAuthExtension;

class VinorcolaGluuAuthBundle extends Bundle
{
    /**
     * {@inheritdoc}
     * @return VinorcolaGluuAuthExtension
     */
    public function getContainerExtension()
    {
        return new VinorcolaGluuAuthExtension();
    }
}
