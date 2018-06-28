<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 13.06.18
 * Time: 22:41
 */
namespace CleanPhp\Invoicer\Persistence\Doctrine\Repository;

use CleanPhp\Invoicer\Domain\Repository\CustomerRepositoryInterface;

class CustomerRepository extends AbstractDoctrineRepository implements CustomerRepositoryInterface
{
    protected $entityClass ='CleanPhp\Invoicer\Domain\Entity\Customer';


}