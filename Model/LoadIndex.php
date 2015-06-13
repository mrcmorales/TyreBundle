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
 * LoadIndex.
 */
class LoadIndex extends AbstractBase
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $description;

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

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     *
     * @return LoadIndex
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
