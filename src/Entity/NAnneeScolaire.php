<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="_n_annee_scolaire")
 * @ORM\Entity(repositoryClass="App\Repository\NAnneeScolaireRepository")
 */
class NAnneeScolaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $libelle_court;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $libelle_long;

    /**
     * @ORM\Column(type="boolean")
     */
    private $en_cours;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCourt(): ?int
    {
        return $this->libelle_court;
    }

    public function setLibelleCourt(int $libelle_court): self
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

    public function getEnCours(): ?bool
    {
        return $this->en_cours;
    }

    public function setEnCours(bool $en_cours): self
    {
        $this->en_cours = $en_cours;

        return $this;
    }
}
