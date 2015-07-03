<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;

/**
 * Class Player
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerRepository")
 * @ORM\Table(name="player")
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Player
{

    /**
     * @var int $id Id
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name Name
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string $position Position
     *
     * @DoctrineAssert\Enum(entity="AppBundle\DBAL\Types\AmericanFootballPositionType")
     *
     * @ORM\Column(type="AmericanFootballPositionType", nullable=false)
     */
    private $position;

    /**
     * @var int $number Number
     *
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @var \DateTime $birthday Birthday
     *
     * @ORM\Column(type="datetime")
     */
    private $birthday;

    /**
     * @var int $height Height
     *
     * @ORM\Column(type="integer")
     */
    private $height;

    /**
     * @var int $weight Weight
     *
     * @ORM\Column(type="integer")
     */
    private $weight;

    /**
     * @var bool $inRoster Player in roster
     *
     * @ORM\Column(type="boolean")
     */
    private $inRoster = false;

    /**
     * Get id
     *
     * @return int Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get name
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get position
     *
     * @return string Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set position
     *
     * @param string $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get number
     *
     * @return int Number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set number
     *
     * @param int $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime Birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday birthday
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get height
     *
     * @return int Height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get weight
     *
     * @return int Weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set weight
     *
     * @param int $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get inRoster
     *
     * @return boolean InRoster
     */
    public function isInRoster()
    {
        return $this->inRoster;
    }

    /**
     * Set inRoster
     *
     * @param boolean $inRoster inRoster
     *
     * @return $this
     */
    public function setInRoster($inRoster)
    {
        $this->inRoster = $inRoster;

        return $this;
    }
}
