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
class EncoderFactory implements EncoderFactoryInterface
{

    public function __construct($encoders) {}

    /**
     * Returns the password encoder to use for the given account.
     *
     * @param UserInterface|string $user A UserInterface instance or a class name
     *
     * @return PasswordEncoderInterface
     *
     * @throws \RuntimeException when no password encoder could be found for the user
     */
    public function getEncoder($user) {}


    /**
     * Creates the actual encoder instance.
     *
     * @param array config
     *
     * @return PasswordEncoderInterface
     *
     * @throws \InvalidArgumentException
     */
    private function createEncoder($config) {}
}