<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Order extends AbstractEntity
{
    /** @var \Customer $customer */
    protected $customer;
    /** @var string $orderNumber */
    protected $orderNumber;
    /** @var string $description */
    protected $description;
    /** @var float $total */
    protected $total;

    /**
     * @return \Customer
     */
    public function getCustomer(): \Customer
    {
        return $this->customer;
    }

    /**
     * @param \Customer $customer
     */
    public function setCustomer(\Customer $customer): Order
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber(string $orderNumber): Order
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): Order
    {
        $this->description = $description;

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
     */
    public function setTotal(float $total): Order
    {
        $this->total = $total;

        return $this;
    }
}