<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Customer extends AbstractEntity
{
    /** @var string $name */
    protected $name;
    /** @var string $email */
    protected $email;

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail() : string
    {
        return $this->emailAddress;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }
}