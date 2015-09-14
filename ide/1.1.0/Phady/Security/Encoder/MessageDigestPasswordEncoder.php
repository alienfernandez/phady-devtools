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

use Phady\Security\Core\Encoder\BasePasswordEncoder;

/**
 * @class Phady\Security\Core\Encoder\MessageDigestPasswordEncoder
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class MessageDigestPasswordEncoder extends BasePasswordEncoder
{
    /**
     * Constructor.
     *
     * @param string algorithm          The digest algorithm to use
     * @param bool   encodeHashAsBase64 Whether to base64 encode the password hash
     * @param int    iterations         The number of iterations to use to stretch the password hash
     */
    public function __construct($algorithm = "sha512", $encodeHashAsBase64 = true, $iterations = 5000) {}

/**
     * Encodes the raw password.
     *
     * @param string raw  The password to encode
     * @param string salt The salt
     *
     * @return string The encoded password
     */
    public function encodePassword($raw, $salt) {}

    /**
     * Checks a raw password against an encoded password.
     *
     * @param string encoded An encoded password
     * @param string raw     A raw password
     * @param string salt    The salt
     *
     * @return bool true if the password is valid, false otherwise
     */
    public function isPasswordValid($encoded, $raw, $salt) {}
}