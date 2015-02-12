<?php
/**
 * Tyre Bundle for Symfony2
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author: Marc Morales Valldepérez <marcmorales83@gmail.com>
 *
 * Date: 09/02/15
 * Time: 18:48
 */
namespace MrcMorales\TyreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Registers the additional validators according to the storage
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ValidationPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasParameter('mrc_morales.tyre.storage')) {
            return;
        }

        $storage = $container->getParameter('mrc_morales.tyre.storage');
        $validationFile = __DIR__.'/../../Resources/config/validation/'.$storage.'.yml';

        if ($container->hasDefinition('validator.builder')) {
            // Symfony 2.5+
            $container->getDefinition('validator.builder')
                ->addMethodCall('addYamlMapping', array($validationFile));

            return;
        }
    }
}
