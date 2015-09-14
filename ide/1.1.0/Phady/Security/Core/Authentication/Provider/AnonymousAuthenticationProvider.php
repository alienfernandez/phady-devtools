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

/**
 * Phady\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
 *
 */
class AnonymousAuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * Constructor.
     *
     * @param string key The key shared with the authentication token
     */
    public function __construct($key) {}

    /**
     * {@inheritdoc}
     */
    public function authenticate($token) {}

    /**
     * {@inheritdoc}
     */
    public function supports($token) {}
}
