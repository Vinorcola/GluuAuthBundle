<?php

namespace Vinorcola\GluuAuthBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var bool
     */
    private $emailAddressVerified;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var int
     */
    private $siren;

    /**
     * @var string[]
     */
    private $roles;

    /**
     * User constructor.
     *
     * @param string   $emailAddress
     * @param bool     $emailAddressVerified
     * @param string   $displayName
     * @param int      $siren
     * @param string[] $roles
     */
    public function __construct(
        string $emailAddress,
        bool $emailAddressVerified,
        string $displayName,
        int $siren,
        array $roles
    ) {
        $this->emailAddress = $emailAddress;
        $this->emailAddressVerified = $emailAddressVerified;
        $this->displayName = $displayName;
        $this->siren = $siren;
        $this->roles = $roles;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @return bool
     */
    public function isEmailAddressVerified(): bool
    {
        return $this->emailAddressVerified;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @return int
     */
    public function getSiren(): int
    {
        return $this->siren;
    }

    /**
     * @return string[]
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->emailAddress;
    }

    public function getPassword() { return null; }
    public function getSalt() { return null; }
    public function eraseCredentials() {}
}
