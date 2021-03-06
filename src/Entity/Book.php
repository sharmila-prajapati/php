<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


class BookStorage
{
    private $id;

    private $isbn;

    private $title;

    private $addedOn;

    public function getId()
    {
        return $this->id;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAddedOn(): ?\DateTimeInterface
    {
        return $this->addedon;
    }

    public function setAddedOn(?\DateTimeInterface $addedon): self
    {
        $this->addedon = $addedon;

        return $this;
    }
}
