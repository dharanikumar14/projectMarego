<?php

namespace deproject\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soldtickets
 *
 * @ORM\Table(name="soldtickets")
 * @ORM\Entity
 */
class Soldtickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="T_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tId;

    /**
     * @var integer
     *
     * @ORM\Column(name="C_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @var integer
     *
     * @ORM\Column(name="G_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gId;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

public function gettId()
{
	return $this->tId;
}
public function settId($tId)
{
	$this->tId = $tId;

	return $this;
}

public function getgId()
{
	return $this->gId;
}
public function setgId($gId)
{
	$this->gId = $gId;

	return $this;
}
public function getcId()
{
	return $this->cId;
}
public function setcId($cId)
{
	$this->cId = $cId;

	return $this;
}
public function getPid()
{
	return $this->pid;
}
public function setpId($pId)
{
	$this->pId = $pId;

	return $this;
}
public function getquantity()
{
	return $this->quantity;
}
public function setquantity($quantity)
{
	$this->quantity = $quantity;

	return $this;
}
public function getpricePerTicket()
{
	return $this->pricePerTicket;
}
public function gettotal()
{
	return $this->total;
}
public function getdate()
{
	return $this->date;
}
}