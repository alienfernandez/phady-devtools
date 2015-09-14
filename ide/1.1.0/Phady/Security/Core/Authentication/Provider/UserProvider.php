<?php
/*
+------------------------------------------------------------------------+
| Phady Framework                                                        |
+------------------------------------------------------------------------+
| Copyright (c) 2015                                                     |
+------------------------------------------------------------------------+
| Phady Framework is a complement of Phalcon Framework                   |
|                                                                        |
+------------------------------------------------------------------------+
| Authors: Alien fernandez Fuentes <alienfernandez85@gmail.com>          |
+------------------------------------------------------------------------+
*/

namespace Phady\Security\Core\Authentication\Provider;


use Phady\Security\Core\User\UserProviderInterface;
use Phady\Security\Core\Authentication\Model\UserManagerInterface;
use Phady\Security\Core\User\UserInterface;

/**
 * Phady\Security\Core\Authentication\Provider\UserProvider
 *
 */
class UserProvider implements UserProviderInterface
{

    /**
     * Constructor.
     *
     * @param UserManagerInterface userManager
     */
    public function __construct(UserManagerInterface $userManager) {}
    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username) {}


    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user) {}

    /**
     * {@inheritdoc}
     */
    public function supportsClass($classUser) {}

    /**
     * Finds a user by username.
     *
     * This method is meant to be an extension point for child classes.
     *
     * @param string username
     *
     * @return UserInterface|null
     */
    protected function findUser($username) {}
}