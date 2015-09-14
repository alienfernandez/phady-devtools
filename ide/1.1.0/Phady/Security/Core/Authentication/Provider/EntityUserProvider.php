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

use Phady\Security\Core\User\UserInterface;

/**
 * Phady\Security\Core\Authentication\Provider\EntityUserProvider
 *
 */
class EntityUserProvider implements UserProviderInterface
{
    public function __construct($classUser, $property = null, $managerName = null) {}

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
}