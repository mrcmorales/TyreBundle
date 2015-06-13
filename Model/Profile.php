<?php

/**
 * Tyre Bundle for Symfony2.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author: Marc Morales Valldepérez <marcmorales83@gmail.com>
 *
 * Date: 09/02/15
 * Time: 17:23
 */
namespace MrcMorales\TyreBundle\Model;

/**
 * Profile.
 */
class Profile extends AbstractBase
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Width
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
