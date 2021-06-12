<?php

namespace App\Entity;

use App\Repository\UsagersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsagersRepository::class)
 */
class Usagers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Num_carte;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Num_usagers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_famille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom_usage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prenom_2;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse_2;

    /**
     * @ORM\Column(type="integer")
     */
    private $Code_postal;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Ville;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_creation_carte;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_modification_carte;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_renouvellement_carte;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_suppression_carte;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_fin_validite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Statut_validite_carte;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cim_1;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cim_3;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cim_4;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cim_5;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cim_6;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cim_7;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cim_8;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCarte(): ?int
    {
        return $this->Num_carte;
    }

    public function setNumCarte(int $Num_carte): self
    {
        $this->Num_carte = $Num_carte;

        return $this;
    }

    public function getNumUsagers(): ?string
    {
        return $this->Num_usagers;
    }

    public function setNumUsagers(string $Num_usagers): self
    {
        $this->Num_usagers = $Num_usagers;

        return $this;
    }

    public function getNomFamille(): ?string
    {
        return $this->Nom_famille;
    }

    public function setNomFamille(string $Nom_famille): self
    {
        $this->Nom_famille = $Nom_famille;

        return $this;
    }

    public function getNomUsage(): ?string
    {
        return $this->Nom_usage;
    }

    public function setNomUsage(?string $Nom_usage): self
    {
        $this->Nom_usage = $Nom_usage;

        return $this;
    }

    public function getPrenom1(): ?string
    {
        return $this->Prenom_1;
    }

    public function setPrenom1(string $Prenom_1): self
    {
        $this->Prenom_1 = $Prenom_1;

        return $this;
    }

    public function getPrenom2(): ?string
    {
        return $this->Prenom_2;
    }

    public function setPrenom2(?string $Prenom_2): self
    {
        $this->Prenom_2 = $Prenom_2;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->Date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $Date_naissance): self
    {
        $this->Date_naissance = $Date_naissance;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->Adresse_1;
    }

    public function setAdresse1(string $Adresse_1): self
    {
        $this->Adresse_1 = $Adresse_1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->Adresse_2;
    }

    public function setAdresse2(?string $Adresse_2): self
    {
        $this->Adresse_2 = $Adresse_2;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->Code_postal;
    }

    public function setCodePostal(int $Code_postal): self
    {
        $this->Code_postal = $Code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getDateCreationCarte(): ?\DateTimeInterface
    {
        return $this->Date_creation_carte;
    }

    public function setDateCreationCarte(\DateTimeInterface $Date_creation_carte): self
    {
        $this->Date_creation_carte = $Date_creation_carte;

        return $this;
    }

    public function getDateModificationCarte(): ?\DateTimeInterface
    {
        return $this->Date_modification_carte;
    }

    public function setDateModificationCarte(?\DateTimeInterface $Date_modification_carte): self
    {
        $this->Date_modification_carte = $Date_modification_carte;

        return $this;
    }

    public function getDateRenouvellementCarte(): ?\DateTimeInterface
    {
        return $this->Date_renouvellement_carte;
    }

    public function setDateRenouvellementCarte(?\DateTimeInterface $Date_renouvellement_carte): self
    {
        $this->Date_renouvellement_carte = $Date_renouvellement_carte;

        return $this;
    }

    public function getDateSuppressionCarte(): ?\DateTimeInterface
    {
        return $this->Date_suppression_carte;
    }

    public function setDateSuppressionCarte(?\DateTimeInterface $Date_suppression_carte): self
    {
        $this->Date_suppression_carte = $Date_suppression_carte;

        return $this;
    }

    public function getDateFinValidite(): ?\DateTimeInterface
    {
        return $this->Date_fin_validite;
    }

    public function setDateFinValidite(\DateTimeInterface $Date_fin_validite): self
    {
        $this->Date_fin_validite = $Date_fin_validite;

        return $this;
    }

    public function getStatutValiditeCarte(): ?bool
    {
        return $this->Statut_validite_carte;
    }

    public function setStatutValiditeCarte(bool $Statut_validite_carte): self
    {
        $this->Statut_validite_carte = $Statut_validite_carte;

        return $this;
    }

    public function getCim1(): ?bool
    {
        return $this->Cim_1;
    }

    public function setCim1(bool $Cim_1): self
    {
        $this->Cim_1 = $Cim_1;

        return $this;
    }

    public function getCim3(): ?bool
    {
        return $this->Cim_3;
    }

    public function setCim3(bool $Cim_3): self
    {
        $this->Cim_3 = $Cim_3;

        return $this;
    }

    public function getCim4(): ?bool
    {
        return $this->Cim_4;
    }

    public function setCim4(bool $Cim_4): self
    {
        $this->Cim_4 = $Cim_4;

        return $this;
    }

    public function getCim5(): ?bool
    {
        return $this->Cim_5;
    }

    public function setCim5(bool $Cim_5): self
    {
        $this->Cim_5 = $Cim_5;

        return $this;
    }

    public function getCim6(): ?bool
    {
        return $this->Cim_6;
    }

    public function setCim6(bool $Cim_6): self
    {
        $this->Cim_6 = $Cim_6;

        return $this;
    }

    public function getCim7(): ?bool
    {
        return $this->Cim_7;
    }

    public function setCim7(bool $Cim_7): self
    {
        $this->Cim_7 = $Cim_7;

        return $this;
    }

    public function getCim8(): ?bool
    {
        return $this->Cim_8;
    }

    public function setCim8(bool $Cim_8): self
    {
        $this->Cim_8 = $Cim_8;

        return $this;
    }
}
