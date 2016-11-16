<?php

namespace deproject\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soldtickets
 *
 * @ORM\Table(name="soldtickets", indexes={@ORM\Index(name="TID_idx", columns={"T_id"}), @ORM\Index(name="CID_idx", columns={"C_id"}), @ORM\Index(name="gid_idx", columns={"G_id"}), @ORM\Index(name="IDX_B7744985550C4ED", columns={"pid"})})
 * @ORM\Entity
 */
class Soldtickets
{
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date;

    /**
     * @var \Tickets
     *
     * @ORM\Id
     * @ORM\Column(name="T_id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Tickets")
     */
    private $tId;

    /**
     * @var \PriceCategory
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PriceCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="C_id", referencedColumnName="C_id")
     * })
     */
    private $cId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="price_per_ticket", type="float", precision=10, scale=0, nullable=true)
     */
    private $pricePerTicket;

    /**
     * @var \GrantType
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="GrantType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="G_id", referencedColumnName="G_id")
     * })
     */
    private $gId;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var \Partners
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Partners")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pid", referencedColumnName="pid")
     * })
     */
    private $pid;
    
    public function getPId()
    {
    	return $this->pid;
    }
    
    public function getTId()
    {
    	return $this->tId;
    }
    
    public function getCId()
    {
    	return $this->cId;
    }
    
    public function getGId()
    {
    	return $this->gId;
    }
    
    public function getQuantity()
    {
    	return $this->quantity;
    }
    
    public function getpricePerTicket()
    {
    	return $this->pricePerTicket;
    }

    public function getTotal()
    {
    	return $this->total;
    }
    
    public function getdate_created()
    {
    	return $this->date;
    }

}
