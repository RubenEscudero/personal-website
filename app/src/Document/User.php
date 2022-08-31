<?php

namespace App\Document;

use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use MongoDB\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Types\Type;

#[MongoDB\Document(repositoryClass: UserRepository::class)]
class User implements UserInterface
{
    const ROLE_DEFAULT = 'ROLE_USER';
    const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

    #[MongoDB\Id(strategy: 'auto')]
    protected string $id;

    #[MongoDB\Field(type: Type::STRING)]
    #[Assert\NotNull]
    protected string $name;

    #[MongoDB\Field(type: Type::STRING)]
    #[Assert\Email]
    protected string $email;

    #[MongoDB\Field(type: Type::STRING)]
    #[Assert\NotCompromisedPassword]
    protected string $password;

    #[MongoDB\Field(type: Type::STRING)]
    #[Assert\Url]
    protected string $profilePicture;

    #[MongoDB\Field(type: Type::STRING)]
    #[Assert\NotNull]
    protected string $description;

    #[MongoDB\ReferenceMany(targetDocument: Post::class)]
    protected Collection $posts;

    #[MongoDB\ReferenceMany(targetDocument: SocialMedia::class)]
    protected Collection $socialMedias;

    #[MongoDB\ReferenceMany(targetDocument: ProfileSection::class)]
    protected Collection $profileSections;

    #[MongoDB\ReferenceMany(targetDocument: About::class)]
    protected Collection $abouts;

    public function getRoles(): array
    {
        // TODO: Implement getRoles() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUserIdentifier(): string
    {
        // TODO: Implement getUserIdentifier() method.
    }
}