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
 * Time: 17:23
 */
namespace MrcMorales\TyreBundle\Model;

/**
 * Tyre
 */
class Tyre extends AbstractBase
{
    /**
     * @var integer
     */
    protected $ean;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var Width
     */
    protected $width;

    /**
     * @var Diameter
     */
    protected $diameter;

    /**
     * @var Profile
     */
    protected $profile;

    /**
     * @var SpeedRating
     */
    protected $speedRating;

    /**
     * @var LoadIndex
     */
    protected $loadIndex;

    /**
     * @var boolean
     */
    protected $runflat;

    /**
     * @var boolean
     */
    protected $winter;

    /**
     * @var string
     */
    protected $noiseClass;

    /**
     * @var integer
     */
    public $noise;

    /**
     * @var string
     */
    protected $fuelClass;

    /**
     * @var string
     */
    protected $wetClass;

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param $ean
     *
     * @return Tyre
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return Tyre
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param Width $width
     *
     * @return Tyre
     */
    public function setWidth(Width $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return Diameter
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * @param Diameter $diameter
     *
     * @return Tyre
     */
    public function setDiameter(Diameter $diameter)
    {
        $this->diameter = $diameter;

        return $this;
    }

    /**
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param Profile $profile
     *
     * @return Tyre
     */
    public function setProfile(Profile $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * @return SpeedRating
     */
    public function getSpeedRating()
    {
        return $this->speedRating;
    }

    /**
     * @param SpeedRating $speedRating
     *
     * @return Tyre
     */
    public function setSpeedRating(SpeedRating $speedRating)
    {
        $this->speedRating  = $speedRating;

        return $this;
    }

    /**
     * @return LoadIndex
     */
    public function getLoadIndex()
    {
        return $this->loadIndex;
    }

    /**
     * @param LoadIndex $loadIndex
     *
     * @return Tyre
     */
    public function setLoadIndex(LoadIndex $loadIndex)
    {
        $this->loadIndex = $loadIndex;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRunflat()
    {
        return $this->runflat;
    }

    /**
     * @param $runflat
     *
     * @return Tyre
     */
    public function setRunflat($runflat)
    {
        $this->runflat = $runflat;

        return $this;
    }

    /**
     * @return bool
     */
    public function getWinter()
    {
        return $this->winter;
    }

    /**
     * @param $winter
     *
     * @return Tyre
     */
    public function setWinter($winter)
    {
        $this->winter = $winter;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoiseClass()
    {
        return $this->noiseClass;
    }

    /**
     * @param $noiseClass
     *
     * @return Tyre
     */
    public function setNoiseClass($noiseClass)
    {
        $this->noiseClass = $noiseClass;

        return $this;
    }

    /**
     * @return int
     */
    public function getNoise()
    {
        return $this->noise;
    }

    /**
     * @param $noise
     *
     * @return Tyre
     */
    public function setNoise($noise)
    {
        $this->noise = $noise;

        return $this;
    }


    /**
     * @return string
     */
    public function getFuelClass()
    {
        return $this->fuelClass;
    }

    /**
     * @param $fuelClass
     *
     * @return Tyre
     */
    public function setFuelClass($fuelClass)
    {
        $this->fuelClass = $fuelClass;

        return $this;
    }

    /**
     * @return string
     */
    public function getWetClass()
    {
        return $this->wetClass;
    }

    /**
     * @param $wetClass
     *
     * @return Tyre
     */
    public function setWetClass($wetClass)
    {
        $this->wetClass = $wetClass;

        return $this;
    }
}