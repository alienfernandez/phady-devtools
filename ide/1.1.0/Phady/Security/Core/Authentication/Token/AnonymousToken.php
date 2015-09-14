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
 * Phady\Security\Core\Authentication\Token\AnonymousToken
 *
 */
class AnonymousToken extends AbstractToken
{
    /**
     * Constructor.
     *
     * @param string          key   The key shared with the authentication provider
     * @param string          user  The user
     * @param RoleInterface[] roles An array of roles
     */
    public function __construct($key, $user, $roles = []) {}

    /**
     * {@inheritdoc}
     */
    public function getCredentials() {}

    /**
     * Returns the key.
     *
     * @return string The Key
     */
    public function getKey() {}

    /**
     * {@inheritdoc}
     */
    public function serialize() {}

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized) {}

}