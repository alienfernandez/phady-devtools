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

/**
 * @class Phady\Security\Core\Exception\InsufficientAuthenticationException
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class InsufficientAuthenticationException extends AuthenticationException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey() {}
}