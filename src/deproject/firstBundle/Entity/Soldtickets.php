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
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="Tickets",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="T_id", referencedColumnName="T_id")
     * })
     */
    private $ticket;

    /**
     * @var \PriceCategory
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="PriceCategory",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="C_id", referencedColumnName="C_id")
     * })
     */
    private $category;

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
     * @ORM\ManyToOne(targetEntity="GrantType",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="G_id", referencedColumnName="G_id")
     * })
     */
    private $granttype;

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
     * @ORM\ManyToOne(targetEntity="Partners",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pid", referencedColumnName="pid")
     * })
     */
    private $partner;
    
    public function __construct(Tickets $ticket, PriceCategory $category,GrantType $granttype, Partners $partner , $date )
    {
    	$this->ticket = $ticket;
    	$this->category = $category;
    	$this->granttype = $granttype;
    	$this->partner = $partner;
    	$this->date = $date;
    	
    	//$tId = new Soldtickets($tId, $cId, $gId, $pid, $date);
    	 
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
    
    public function getTicket()
    {
    	return $this->ticket;
    }
    
    public function getcategory()
    {
    	return $this->category;
    }
    
    public function getgrantType()
    {
    	return $this->granttype;
    }
    
    public function getpartner()
    {
    	return $this->partner;
    }
    
    public function getdate()
    {
    	return $this->date;
    }
    
   public function setTicket($ticket)
   {
   		$this->ticket = $ticket;
   	
   		return $this;
   }
    
   public function  setDate($date)
   {
   		$this->date = new \DateTime('now');
   		return $this;
   }
   
    	
    	
    	
    	
    	
}

