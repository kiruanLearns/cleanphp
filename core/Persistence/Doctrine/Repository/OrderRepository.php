<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 13.06.18
 * Time: 22:41
 */
namespace CleanPhp\Invoicer\Persistence\Doctrine\Repository;

use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface;
use Doctrine\ORM\Query\Expr;

class OrderRepository extends AbstractDoctrineRepository implements OrderRepositoryInterface
{
    protected $entityClass ='CleanPhp\Invoicer\Domain\Entity\Order';

    public function getUninvoicedOrders()
    {
        $builder = $this->entityManager->createQueryBuilder()
            ->select('o')
            ->from($this->entityClass, 'o')
            ->leftJoin('CleanPhp\Invoicer\Domain\Entity\Invoice','i',Join::WITH,'i.order=o')
            ->where('i.id IS NULL');

        return $builder->getQuery()->getResult();

    }


}