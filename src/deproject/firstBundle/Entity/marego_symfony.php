<?php

namespace deproject\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * marego_symfony
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="deproject\firstBundle\Entity\marego_symfonyRepository")
 */
class marego_symfony
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
     * @ORM\Column(name="partner", type="string", length=255)
     */
    private $partner;


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
     * Set partner
     *
     * @param string $partner
     * @return marego_symfony
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get partner
     *
     * @return string 
     */
    public function getPartner()
    {
        return $this->partner;
    }
}
