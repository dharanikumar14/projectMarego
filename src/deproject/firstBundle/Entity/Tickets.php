<?php

namespace deproject\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets")
 * @ORM\Entity
 */
class Tickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid;

    /**
     * @var string
     *
     * @ORM\Column(name="tname", type="string", length=45, nullable=false)
     */
    private $tname;
    
    public function getTid()
    {
    	return $this->tid;
    }

    public function setTid($tid)
    {
    	$this->tid = $tid;
    
    	return $this;
    }
    public function getTname()
    {
    	return $this->tname;
    }
    
    public function setTname($tname)
    {
    	$this->tname = $tname;
    
    	return $this;
    }
}
