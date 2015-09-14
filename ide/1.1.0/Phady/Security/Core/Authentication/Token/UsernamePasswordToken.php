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

namespace Phady\Security\Core\Authentication\Token;

/**
 * Phady\Security\Core\Authentication\Token\UsernamePasswordToken
 *
 * Interface
 */
class UsernamePasswordToken extends AbstractToken
{
    /**
     * Constructor.
     *
     * @param string|object            user        The username (like a nickname, email address, etc.), or a UserInterface instance or an object implementing a __toString method.
     * @param string                   credentials This usually is the password of the user
     * @param string                   providerKey The provider key
     * @param RoleInterface[]|string[] roles       An array of roles
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($user, $credentials, $providerKey, $roles = []) {}


    /**
     * {@inheritdoc}
     */
    public function setAuthenticated($isAuthenticated) {}

    /**
     * {@inheritdoc}
     */
    public function getCredentials() {}

    /**
     * Returns the provider key.
     *
     * @return string The provider key
     */
    public function getProviderKey() {}

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials() {}

    /**
     * {@inheritdoc}
     */
    public function serialize() {}

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized) {}

}