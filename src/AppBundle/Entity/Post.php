<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Post
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * @ORM\Table(name="post")
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Post
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
     * @var string $title Title
     *
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var string $description Description
     *
     * @ORM\Column(type="string")
     */
    private $description;

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
     * Get title
     *
     * @return string Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get description
     *
     * @return string Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
