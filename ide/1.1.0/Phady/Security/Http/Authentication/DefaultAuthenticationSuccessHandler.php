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


namespace Phady\Security\Http\Authentication;

use Phady\Security\Core\Authentication\Token\TokenInterface;
use \Phalcon\Http\Request;

/**
 * @class Phady\Security\Http\Authentication\DefaultAuthenticationSuccessHandler
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class DefaultAuthenticationSuccessHandler extends \Phalcon\Di\Injectable implements AuthenticationSuccessHandlerInterface {

    /**
     * Gets the options.
     *
     * @return array An array of options
     */
    public function getOptions() {}

    /**
     * Sets the options.
     *
     * @param array options An array of options
     */
    public function setOptions($options) {}

    /**
     * Get the provider key.
     *
     * @return string
     */
    public function getProviderKey() {}

    /**
     * Builds the target URL according to the defined options.
     *
     * @param Request request
     *
     * @return string
     */
    protected function determineTargetUrl(Request $request) {}


    /**
     * Set the provider key.
     *
     * @param string providerKey
     */
    public function setProviderKey($providerKey) {}

    /**
     * This is called when an interactive authentication attempt succeeds. This
     * is called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @param Request        $request
     * @param TokenInterface $token
     *
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {}
}