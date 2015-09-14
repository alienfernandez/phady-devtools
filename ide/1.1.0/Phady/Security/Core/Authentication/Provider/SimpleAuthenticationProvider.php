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
use Phady\Security\Core\Authentication\SimpleAuthenticatorInterface;
use Phady\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Phady\Security\Core\Authentication\Token\TokenInterface;
use Phady\Security\Core\Exception\AuthenticationException;

/**
 * Phady\Security\Core\Authentication\Provider\SimpleAuthenticationProvider
 *
 */
class SimpleAuthenticationProvider implements AuthenticationProviderInterface
{

    public function __construct(SimpleAuthenticatorInterface $simpleAuthenticator, UserProviderInterface $userProvider, $providerKey) {}


    public function authenticate(TokenInterface $token) {}

    public function supports(TokenInterface $token) {}
}