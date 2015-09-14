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

use Phady\Security\Core\User\UserInterface;

/**
 * Phady\Security\Core\Authentication\Token\RememberMeToken
 *
 */
class RememberMeToken extends AbstractToken
{
    /**
     * Constructor.
     *
     * @param UserInterface user
     * @param string        providerKey
     * @param string        key
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(UserInterface $user, $providerKey, $key) {}

    /**
     * {@inheritdoc}
     */
    public function setAuthenticated($authenticated) {}

    /**
     * Returns the provider key.
     *
     * @return string The provider key
     */
    public function getProviderKey() {}

    /**
     * Returns the key.
     *
     * @return string The Key
     */
    public function getKey() {}

    /**
     * {@inheritdoc}
     */
    public function getCredentials() {}

    /**
     * {@inheritdoc}
     */
    public function serialize() {}

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized) {}

}