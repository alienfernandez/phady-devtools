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
use Phady\Security\Core\Authorization\AccessDecisionManagerInterface;
use Phady\Security\Http\AccessMapInterface;

/**
 * @class Phady\Security\Http\Firewall\AnonymousAuthenticationListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class AnonymousAuthenticationListener implements ListenerInterface
{


    public function __construct(TokenStorageInterface $tokenStorage, $key, AuthenticationManagerInterface $authenticationManager = null) {}

    /**
     * This interface must be implemented by firewall listeners.
     */
    public function handle() {}
    
}
