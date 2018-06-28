<?php

namespace CleanPhp\Invoicer\Domain\Service;

use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactoryInterface;
use CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface;

class InvoiceService implements InvoiceServiceInterface
{
    /** @var InvoiceFactoryInterface $invoiceFactory */
    private $invoiceFactory;
    /** @var OrderRepositoryInterface $orderRepository */
    private $orderRepository;

    public function __construct(InvoiceFactoryInterface $invoiceFactory, OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->invoiceFactory = $invoiceFactory;
    }

    public function generateInvoices()
    {
        /** @var Order[] $orders */
        $orders = $this->orderRepository->getUninvoicedOrders();

        /** @var Invoice[] $invoices */
        $invoices = array();
        /** @var Order $order */
        foreach ($orders as $order) {
            $invoices[] = $this->invoiceFactory->createFromOrder($order);
        }
        return $invoices;
    }
}