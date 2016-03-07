<?php
/* src/Altgeek/CoreBundle/Entity/Person.php */

namespace Altgeek\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table("altgeek_person")
 * @ORM\Entity(repositoryClass="Altgeek\CoreBundle\Entity\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstName;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nationality = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
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
     * @return Person
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
     * Add nationality
     *
     * @param \Altgeek\ArtistBundle\Entity\Nationality $nationality
     * @return Person
     */
    public function addNationality(\Altgeek\ArtistBundle\Entity\Nationality $nationality)
    {
        $this->nationality[] = $nationality;

        return $this;
    }

    /**
     * Remove nationality
     *
     * @param \Altgeek\ArtistBundle\Entity\Nationality $nationality
     */
    public function removeNationality(\Altgeek\ArtistBundle\Entity\Nationality $nationality)
    {
        $this->nationality->removeElement($nationality);
    }

    /**
     * Get nationality
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNationality()
    {
        return $this->nationality;
    }
}
