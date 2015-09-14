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

namespace Phady\Security\Core\Exception;

use Phady\Security\Core\Authentication\Token\TokenInterface;

/**
 * @class Phady\Security\Core\Exception\AuthenticationException
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class AuthenticationException extends \RuntimeException implements \Serializable
{

    /**
     * Get the token.
     *
     * @return TokenInterface
     */
    public function getToken() {}

    /**
     * Set the token.
     *
     * @param TokenInterface token
     */
    public function setToken(TokenInterface $token) {}


    public function serialize() {}

    public function unserialize($str) {}


    /**
     * Message key to be used by the translation component.
     *
     * @return string
     */
    public function getMessageKey() {}

    /**
     * Message data to be used by the translation component.
     *
     * @return array
     */
    public function getMessageData() {}
}