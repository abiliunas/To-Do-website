<?php

namespace App\Entity;

use App\Repository\PersonalInformationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonalInformationRepository::class)]
class PersonalInformation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $first_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $last_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $profile_picture_filename;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getProfilePictureFilename(): ?string
    {
        return $this->profile_picture_filename;
    }

    public function setProfilePictureFilename(?string $profile_picture_filename): self
    {
        $this->profile_picture_filename = $profile_picture_filename;

        return $this;
    }
}
