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

namespace Phady\Security\Core\User\Factory;

/**
 * @class Phady\Security\Core\User\Factory\EntityFactory
 * EntityFactory creates services for Phalcon ORM user provider..
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class EntityFactory extends \Phalcon\Di\Injectable implements UserProviderFactoryInterface
{

    public function __construct($key, $providerId) {}

    public function create($id, $config) {}

    public function getKey() {}
}