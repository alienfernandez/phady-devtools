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


namespace Phady\Security\Core\Encoder;

/**
 * @class Phady\Security\Core\Encoder\EncoderFactory
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
abstract class BasePasswordEncoder implements PasswordEncoderInterface
{
    const MAX_PASSWORD_LENGTH = 4096;
    public function __construct($encoders) {}


    /**
     * Demerges a merge password and salt string.
     *
     * @param string mergedPasswordSalt The merged password and salt string
     *
     * @return array An array where the first element is the password and the second the salt
     */
    protected function demergePasswordAndSalt($mergedPasswordSalt) {}


    /**
     * Merges a password and a salt.
     *
     * @param string password the password to be used
     * @param string salt     the salt to be used
     *
     * @return string a merged password and salt
     *
     * @throws \InvalidArgumentException
     */
    protected function mergePasswordAndSalt($password, $salt) {}

    /**
     * Compares two passwords.
     *
     * This method implements a constant-time algorithm to compare passwords to
     * avoid (remote) timing attacks.
     *
     * @param string password1 The first password
     * @param string password2 The second password
     *
     * @return bool true if the two passwords are the same, false otherwise
     */
    protected function comparePasswords($password1, $password2) {}

    /**
     * Checks if the password is too long.
     *
     * @param string password The password to check
     *
     * @return bool true if the password is too long, false otherwise
     */
    protected function isPasswordTooLong($password) {}
}