<?php

namespace CleanPhp\Invoicer\Domain\Factory;

use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Entity\Order;

class InvoiceFactory implements InvoiceFactoryInterface
{
    public function createFromOrder(Order $order): Invoice
    {
        /** @var Invoice $invoice */
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setTotal($order->getTotal());
        $invoice->setInvoiceDate(new \DateTime());

        return $invoice;
    }
}