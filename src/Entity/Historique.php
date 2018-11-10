<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HistoriqueRepository")
 */
class Historique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Individu", inversedBy="historiques")
     * @ORM\JoinColumn(name="individu_id", referencedColumnName="id", nullable=true)
     */
    private $individu;

    /**
     * @ORM\ManyToOne(targetEntity="NTypeHistorique")
     * @ORM\JoinColumn(name="type_historique_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="historiques")
     * @ORM\JoinColumn(name="etablissement_id", referencedColumnName="id", nullable=true)
     */
    private $etablissement;

    /**
     * @ORM\ManyToOne(targetEntity="Effectif", inversedBy="historiques")
     * @ORM\JoinColumn(name="effectif_id", referencedColumnName="id", nullable=true)
     */
    private $effectif;

    /**
     * @ORM\ManyToOne(targetEntity="Dotation", inversedBy="historiques")
     * @ORM\JoinColumn(name="dotation_id", referencedColumnName="id", nullable=true)
     */
    private $dotation;

    /**
     * @ORM\ManyToOne(targetEntity="Consommation", inversedBy="historiques")
     * @ORM\JoinColumn(name="consommation_id", referencedColumnName="id", nullable=true)
     */
    private $consommation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIndividu(): ?Individu
    {
        return $this->individu;
    }

    public function setIndividu(?Individu $individu): self
    {
        $this->individu = $individu;

        return $this;
    }

    public function getType(): ?NTypeHistorique
    {
        return $this->type;
    }

    public function setType(?NTypeHistorique $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEtablissement(): ?Etablissement
    {
        return $this->etablissement;
    }

    public function setEtablissement(?Etablissement $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getEffectif(): ?Effectif
    {
        return $this->effectif;
    }

    public function setEffectif(?Effectif $effectif): self
    {
        $this->effectif = $effectif;

        return $this;
    }

    public function getDotation(): ?Dotation
    {
        return $this->dotation;
    }

    public function setDotation(?Dotation $dotation): self
    {
        $this->dotation = $dotation;

        return $this;
    }

    public function getConsommation(): ?Consommation
    {
        return $this->consommation;
    }

    public function setConsommation(?Consommation $consommation): self
    {
        $this->consommation = $consommation;

        return $this;
    }
}
