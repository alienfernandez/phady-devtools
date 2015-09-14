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

namespace Phady\Security\Core\Authentication;

use Phady\Security\Core\Authentication\Token\TokenInterface;

/**
 * @class Phady\Security\Core\Authentication\AuthenticationProviderManager
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class AuthenticationProviderManager implements AuthenticationManagerInterface
{

    /**
     * Constructor.
     *
     * @param AuthenticationProviderInterface[] providers        An array of AuthenticationProviderInterface instances
     * @param bool                              eraseCredentials Whether to erase credentials after authentication or not
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($providers, $eraseCredentials = true) {}

    /**
     * {@inheritdoc}
     */
    public function setProviders($providers) {}

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface $token) {}

}