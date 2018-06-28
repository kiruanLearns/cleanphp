<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Invoice
{
    /** @var Order $order */
    protected $order;
    /** @var \DateTime $invoiceDate */
    protected $invoiceDate;
    /** @var float $total */
    protected $total;

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     * @return Invoice
     */
    public function setOrder(Order $order): Invoice
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate(): \DateTime
    {
        return $this->invoiceDate;
    }

    /**
     * @param \DateTime $invoiceDate
     * @return Invoice
     */
    public function setInvoiceDate(\DateTime $invoiceDate): Invoice
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return Invoice
     */
    public function setTotal(float $total): Invoice
    {
        $this->total = $total;

        return $this;
    }


}