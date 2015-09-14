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

namespace Phady\Security\Core\Role;

use Phady\Security\Core\Authentication\Token\TokenInterface;

/**
 * @class Phady\Security\Core\Role\SwitchUserRole
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class SwitchUserRole extends Role
{

    /**
     * Constructor.
     *
     * @param string         role   The role as a string
     * @param TokenInterface source The original token
     */
    public function __construct($role, TokenInterface $source) {}

    /**
     * Returns the original Token.
     *
     * @return TokenInterface The original TokenInterface instance
     */
    public function getSource() {}
}