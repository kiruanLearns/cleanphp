<?php

use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Service\InvoiceService;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;

describe(
    'InvoicingService',
    function () {
        describe(
            '->generateInvoices()',
            function () {
                beforeEach(
                    function () {
                        $this->repository = $this->getProphet()->prophesize('CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface');
                        $this->factory = $this->getProphet()->prophesize('CleanPhp\Invoicer\Domain\Factory\InvoiceFactoryInterface');
                    }
                );
                afterEach(
                    function () {
                        $this->getProphet()->checkPredictions();
                    }
                );
//                it(
//                    'should query the repository for uninvoiced Orders',
//                    function () {
//                        $orders = [(new Order())->setTotal(400)];
//                        $this->repository->getUninvoicedOrders()->willReturn($orders);
//
//                        $this->repository->getUninvoicedOrders()->shouldBeCalled();
//
//                        $service = new InvoiceService($this->factory->reveal(), $this->repository->reveal());
//                        $invoice = $service->generateInvoices();
//                    }
//                );
                it(
                    'should return an Invoice for each uninvoiced Order',
                    function () {
                        $orders = [(new Order())->setTotal(400)];
                        $invoices = [(new Invoice())->setTotal(400)];

                        $this->repository->getUninvoicedOrders()->willReturn($orders);
                        $this->factory->createFromOrder($orders[0])->willReturn($invoices[0]);

                        $service = new InvoiceService(
                            $this->factory->reveal(),
                            $this->repository->reveal()
                        );

                        $results = $service->generateInvoices();

                        expect($results)->to->be->a('array');
                        expect($results)->to->have->length(count($orders));
                    }
                );
            }
        );
    }
);