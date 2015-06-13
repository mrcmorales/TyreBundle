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
 * Brand.
 */
class Brand extends AbstractBase
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Category
     */
    protected $category;

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
     * @return Brand
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     *
     * @return Brand
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }
}
