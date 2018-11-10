<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="_n_type_historique")
 * @ORM\Entity(repositoryClass="App\Repository\NTypeHistoriqueRepository")
 */
class NTypeHistorique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libelle_court;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle_long;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCourt(): ?string
    {
        return $this->libelle_court;
    }

    public function setLibelleCourt(?string $libelle_court): self
    {
        $this->libelle_court = $libelle_court;

        return $this;
    }

    public function getLibelleLong(): ?string
    {
        return $this->libelle_long;
    }

    public function setLibelleLong(string $libelle_long): self
    {
        $this->libelle_long = $libelle_long;

        return $this;
    }
}
