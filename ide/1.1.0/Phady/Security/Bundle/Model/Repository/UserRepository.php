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


namespace Phady\Security\Bundle\Model\Repository;


/**
 * @class Phady\Security\Bundle\Model\Repository\RoleRepository
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class RoleRepository extends \Phalcon\DI\Injectable
{

    /**
     * @name getFilter - Get filter search
     * @param array arrDataFilter - Array filter
     * @return array
     */
    static public function getFilter($arrData, $select = false) {}


    /**
     * @name getUsers - Get users given the array of filter
     * @param array arrDataFilter - Array filter
     *              [create_at] - Date
     *              [start] - Start date
     *              [limit] - Limit items per page
     * @return array
     */
    public function getUsers($arrDataFilter) {}

    /**
     * @name getTotalUsers - Get total users given the array of filter
     * @param array arrDataFilter - Array filter
     *              [create_at] - Date
     * @return array
     */
    public function getTotalUsers($arrDataFilter) {}
}
