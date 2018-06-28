<?php
namespace CleanPhp\Invoicer\Domain\Entity;

abstract class AbstractEntity
{
    /** @var int $id */
    protected $id;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : AbstractEntity
    {
        $this->id = $id;

        return $this;
    }
}