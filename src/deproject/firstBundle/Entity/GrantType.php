<?php

namespace deproject\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrantType
 *
 * @ORM\Table(name="grant type")
 * @ORM\Entity
 */
class GrantType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="G_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gId;

    /**
     * @var string
     *
     * @ORM\Column(name="Grant_name", type="string", length=45, nullable=false)
     */
    private $grantName;
    
    public function getGid()
    {
    	return $this->gId;
    }
    
    public function getgrantName()
    {
    	return $this->grantName;
    }


}
