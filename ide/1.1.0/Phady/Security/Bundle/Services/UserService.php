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


namespace Phady\Security\Bundle\Services;



/**
 * @class Phady\Security\Bundle\Services\UserService
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class UserService extends \Phalcon\DI\Injectable
{

    /**
     * @name getUsers - Get users
     * @param array arrData - Data to filter
     * @param boolean getTotal - Get total users to filter applied
     * @return array
     */
    public function getUsers($arrData, $getTotal = false) {}
}
