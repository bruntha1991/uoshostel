<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finance
 */
class Finance
{
    /**
     * @var float
     */
    private $balance;

    /**
     * @var string
     */
    private $studentno;


    /**
     * Set balance
     *
     * @param float $balance
     * @return Finance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return float 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Get studentno
     *
     * @return string 
     */
    public function getStudentno()
    {
        return $this->studentno;
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Set studentno
     *
     * @param string $studentno
     * @return Finance
     */
    public function setStudentno($studentno)
    {
        $this->studentno = $studentno;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
