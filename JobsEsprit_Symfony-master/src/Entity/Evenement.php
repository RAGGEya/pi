<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'La description ne doit pas être vide.')]
    private ?string $description = null;

    #[ORM\Column(length: 10)]
    #[Assert\Choice(choices: ['public', 'prive'], message: 'Le type doit être public ou prive.')]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(pattern: '/^([01]\d|2[0-3]):([0-5]\d)$/', message: 'Format de l\'heure invalide. Utilisez le format hh:mm.')]
    private ?string $heure = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(pattern: '/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/', message: 'Format de la date invalide. Utilisez le format jj/mm/aaaa.')]
    private ?string $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le lieu ne doit pas être vide.')]
    private ?string $lieu = null;

    #[ORM\Column(length: 10)]
    #[Assert\Choice(choices: ['oui', 'non'], message: 'La valeur doit être oui ou non.')]
    private ?string $payant = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le nombre de places ne doit pas être vide.')]
    #[Assert\Type(type: 'integer', message: 'Le nombre de places doit être un nombre entier.')]
    private ?int $nombreDePlaces = null;

    /**
     * @Assert\Callback
     */
    public function validateDate(ExecutionContextInterface $context)
    {
        if ($this->date) {
            $inputDate = \DateTime::createFromFormat('d/m/Y', $this->date);
            $today = new \DateTime('today');

            if (!$inputDate || $inputDate < $today) {
                $context->buildViolation('La date ne peut pas être antérieure à aujourd\'hui.')
                    ->atPath('date')
                    ->addViolation();
            }
        }
    }

    // Getter and setter methods

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getPayant(): ?string
    {
        return $this->payant;
    }

    public function setPayant(?string $payant): static
    {
        $this->payant = $payant;

        return $this;
    }

    public function getNombreDePlaces(): ?int
    {
        return $this->nombreDePlaces;
    }

    public function setNombreDePlaces(?int $nombreDePlaces): static
    {
        $this->nombreDePlaces = $nombreDePlaces;

        return $this;
    }
}
