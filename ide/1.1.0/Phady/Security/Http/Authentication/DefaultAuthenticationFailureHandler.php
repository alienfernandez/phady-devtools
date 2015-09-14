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

use Phady\Security\Core\Exception\AuthenticationException;
use Phalcon\Http\Request;

/**
 * @class Phady\Security\Http\Authentication\DefaultAuthenticationFailureHandler
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class DefaultAuthenticationFailureHandler extends \Phalcon\Di\Injectable implements AuthenticationFailureHandlerInterface {

    /**
     * Constructor.
     *
     * @param HttpKernelInterface httpKernel
     * @param HttpUtils           httpUtils
     * @param array               options    Options for processing a failed authentication attempt.
     * @param LoggerInterface     logger     Optional logger
     */
    public function __construct($options = []) {}

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
     * This is called when an interactive authentication attempt fails. This is
     * called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return Response The response to return, never null
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {}
}