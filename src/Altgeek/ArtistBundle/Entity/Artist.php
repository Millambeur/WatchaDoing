<?php
/* src/Altgeek/ArtistBundle/Entity/Artist.php */

namespace Altgeek\ArtistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ORM\Table("altgeek_artist")
 * @ORM\Entity(repositoryClass="Altgeek\ArtistBundle\Entity\ArtistRepository")
 */
class Artist
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @ORM\ManyToMany(targetEntity="Altgeek\ArtistBundle\Entity\Nationality")
     * @ORM\JoinColumn(nullable=true)
     */
    private $nationality;

    /**
     * @ORM\ManyToMany(targetEntity="Altgeek\ArtistBundle\Entity\Profession")
     * @ORM\JoinColumn(nullable=true)
     */
    private $profession;


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
     * Set name
     *
     * @param string $name
     * @return Artist
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Artist
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Artist
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set nationality
     *
     * @param \Altgeek\ArtistBundle\Entity\Nationality $nationality
     * @return Artist
     */
    public function setNationality(Nationality $nationality = null)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return \Altgeek\ArtistBundle\Entity\Nationality 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set profession
     *
     * @param \Altgeek\ArtistBundle\Entity\Profession $profession
     * @return Artist
     */
    public function setProfession(Profession $profession = null)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return \Altgeek\ArtistBundle\Entity\Profession 
     */
    public function getProfession()
    {
        return $this->profession;
    }
}
