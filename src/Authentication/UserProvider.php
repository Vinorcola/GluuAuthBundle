<?php

namespace Vinorcola\GluuAuthBundle\Authentication;

use Symfony\Component\Security\Core\Exception\LogicException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Vinorcola\GluuAuthBundle\Model\User;

class UserProvider implements UserProviderInterface
{
    public function loadUserByUsername($userCredentials)
    {
        if (!is_array($userCredentials)){
            throw new LogicException('Credentials must be an array of user info extracted from the request.');
        }

        return new User(
            $userCredentials['emailAddress'],
            $userCredentials['emailAddressVerified'],
            $userCredentials['displayName'],
            $userCredentials['siren'],
            $userCredentials['roles']
        );
    }

    public function refreshUser(UserInterface $user)
    {
        return $user;
    }

    public function supportsClass($class)
    {
        return $class === User::class;
    }
}
