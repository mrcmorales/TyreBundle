<?php

/**
 * Tyre Bundle for Symfony2.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author: Yosvel Quintero <yosvelquintero@gmail.com>
 *
 * Date: 08/06/15
 * Time: 17:23
 */
namespace MrcMorales\TyreBundle\Model;

/**
 * Family.
 */
class Family extends AbstractBase
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Family
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
