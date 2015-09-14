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

use Phady\Security\Http\AccessMapInterface;
use Phady\Security\Http\EntryPoint\AuthenticationEntryPointInterface;

/**
 * @class Phady\Security\Http\Firewall\ChannelListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class ChannelListener extends \Phalcon\Di\Injectable implements ListenerInterface
{

    public function __construct(AuthenticationEntryPointInterface $authenticationEntryPoint) {}

    /**
     * Set map
     *
     */
    public function setMap(AccessMapInterface $map) {}


    /**
     * Set authenticationEntryPoint
     *
     */
    public function setAuthenticationEntryPoint(AuthenticationEntryPointInterface $authenticationEntryPoint) {}

    /**
     * This interface must be implemented by firewall listeners.
     */
    public function handle() {}
    
}
