<?php
/* src/Altgeek/ArtistBundle/Entity/Nationality.php */

namespace Altgeek\ArtistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nationality
 *
 * @ORM\Table("altgeek_nationality")
 * @ORM\Entity(repositoryClass="Altgeek\ArtistBundle\Entity\NationalityRepository")
 */
class Nationality
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
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;


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
     * Set country
     *
     * @param string $country
     * @return Nationality
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Nationality
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
}
