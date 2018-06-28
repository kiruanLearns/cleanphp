<?php
namespace CleanPhp\Invoicer\Domain\Factory;

use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Entity\Order;

interface InvoiceFactoryInterface
{
    /**
     * @param Order $order
     * @return Invoice
     */
    public function createFromOrder(Order $order): Invoice;
}