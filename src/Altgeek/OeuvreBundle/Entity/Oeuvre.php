<?php
/* src/Altgeek/OeuvreBundle/Entity/Oeuvre.php */

namespace Altgeek\OeuvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table("altgeek_oeuvre")
 * @ORM\Entity(repositoryClass="Altgeek\OeuvreBundle\Entity\OeuvreRepository")
 */
class Oeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="string", length=255)
     */
    private $synopsis;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="integer")
     */
    private $grade;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberofvoters", type="integer")
     */
    private $numberOfVoters;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication", type="datetime")
     */
    private $publication;

    /**
     * @ORM\ManyToOne(targetEntity="Altgeek\OeuvreBundle\Entity\Oeuvre")
     * @ORM\JoinColumn(nullable=true)
     */
    private $sousOeuvre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Oeuvre
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     * @return Oeuvre
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string 
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return Oeuvre
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set numberOfVoters
     *
     * @param integer $numberOfVoters
     * @return Oeuvre
     */
    public function setNumberOfVoters($numberOfVoters)
    {
        $this->numberOfVoters = $numberOfVoters;

        return $this;
    }

    /**
     * Get numberOfVoters
     *
     * @return integer 
     */
    public function getNumberOfVoters()
    {
        return $this->numberOfVoters;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Oeuvre
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set publication
     *
     * @param \DateTime $publication
     * @return Oeuvre
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \DateTime 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set sousOeuvre
     *
     * @param \Altgeek\OeuvreBundle\Entity\Oeuvre $sousOeuvre
     * @return Oeuvre
     */
    public function setSousOeuvre(Oeuvre $sousOeuvre = null)
    {
        $this->sousOeuvre = $sousOeuvre;

        return $this;
    }

    /**
     * Get sousOeuvre
     *
     * @return \Altgeek\OeuvreBundle\Entity\Oeuvre 
     */
    public function getSousOeuvre()
    {
        return $this->sousOeuvre;
    }
}
