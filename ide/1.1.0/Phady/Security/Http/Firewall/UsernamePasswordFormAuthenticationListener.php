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

namespace Phady\Security\Http\Firewall;

use Phady\Security\Core\Authentication\AuthenticationManagerInterface;
use Phady\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Phady\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Phady\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

/**
 * @class Phady\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class UsernamePasswordFormAuthenticationListener extends AbstractAuthenticationListener
{

    public function __construct(TokenStorageInterface $tokenStorage, AuthenticationManagerInterface $authenticationManager,
        $providerKey, AuthenticationSuccessHandlerInterface $successHandler, AuthenticationFailureHandlerInterface $failureHandler,
         $options = [], $csrfTokenManager = null) {}


    /**
     * {@inheritdoc}
     */
    protected function requiresAuthentication(Request $request) {}

    /**
     * {@inheritdoc}
     */
    public function attemptAuthentication(Request $request) {}

}
