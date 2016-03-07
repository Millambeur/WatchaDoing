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
     * @ORM\OnetoOne(targetEntity="Altgeek\CoreBundle\Entity\Person")
     * @ORM\JoinColumn(nullable=false)
     */
    private $person;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profession = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add profession
     *
     * @param \Altgeek\ArtistBundle\Entity\Profession $profession
     * @return Artist
     */
    public function addProfession(\Altgeek\ArtistBundle\Entity\Profession $profession)
    {
        $this->profession[] = $profession;

        return $this;
    }

    /**
     * Remove profession
     *
     * @param \Altgeek\ArtistBundle\Entity\Profession $profession
     */
    public function removeProfession(\Altgeek\ArtistBundle\Entity\Profession $profession)
    {
        $this->profession->removeElement($profession);
    }

    /**
     * Set person
     *
     * @param \Altgeek\CoreBundle\Entity\Person $person
     * @return Artist
     */
    public function setPerson(\Altgeek\CoreBundle\Entity\Person $person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \Altgeek\CoreBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }
}
