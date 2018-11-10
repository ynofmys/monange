<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtablissementRepository")
 */
class Etablissement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(name="code_rne", type="string", length=13)
     */
    private $codeRne;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="NAnneeScolaire")
     * @ORM\JoinColumn(name="annee_scolaire_id", referencedColumnName="id")
     */
    private $anneeScolaire;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="Effectif", mappedBy="etablissement")
     * @ORM\JoinColumn(name="effectif_id", referencedColumnName="id", nullable=true)
     */
    private $effectif;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="Dotation", mappedBy="etablissement")
     * @ORM\JoinColumn(name="dotation_id", referencedColumnName="id", nullable=true)
     */
    private $dotation;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="Consommation", mappedBy="etablissement")
     * @ORM\JoinColumn(name="consommation_id", referencedColumnName="id", nullable=true)
     */
    private $consommation;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="Historique", mappedBy="etablissement")
     */
    private $historiques;


    public function __construct()
    {
        $this->historiques = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCodeRne(): ?string
    {
        return $this->codeRne;
    }

    public function setCodeRne(string $code_rne): self
    {
        $this->code_rne = $codeRne;

        return $this;
    }

    /**
     * @return Collection|Historique[]
     */
    public function getHistoriques(): Collection
    {
        return $this->historiques;
    }

    public function addHistorique(Historique $historique): self
    {
        if (!$this->historiques->contains($historique)) {
            $this->historiques[] = $historique;
            $historique->setEtablissement($this);
        }

        return $this;
    }

    public function removeHistorique(Historique $historique): self
    {
        if ($this->historiques->contains($historique)) {
            $this->historiques->removeElement($historique);
            // set the owning side to null (unless already changed)
            if ($historique->getEtablissement() === $this) {
                $historique->setEtablissement(null);
            }
        }

        return $this;
    }

    public function getAnneeScolaire(): ?NAnneeScolaire
    {
        return $this->anneeScolaire;
    }

    public function setAnneeScolaire(?NAnneeScolaire $anneeScolaire): self
    {
        $this->anneeScolaire = $anneeScolaire;

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
