<?php

namespace MrcMorales\TyreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use MrcMorales\TyreBundle\DependencyInjection\Compiler\ValidationPass;
use MrcMorales\TyreBundle\DependencyInjection\MrcMoralesTyreExtension;

class TyreBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new ValidationPass());
    }


    public function getContainerExtension()
    {
        return new MrcMoralesTyreExtension();
    }
}
