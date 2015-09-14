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

namespace Phady\Security\Core\User;

/**
 * @class Phady\Security\Core\User\UserChecker
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class UserChecker implements UserCheckerInterface {

    /**
     * Checks the user account before authentication.
     *
     * @param UserInterface user a UserInterface instance
     */
    public function checkPreAuth(UserInterface $user) {}

    /**
     * Checks the user account after authentication.
     *
     * @param UserInterface user a UserInterface instance
     */
    public function checkPostAuth(UserInterface $user) {}
}