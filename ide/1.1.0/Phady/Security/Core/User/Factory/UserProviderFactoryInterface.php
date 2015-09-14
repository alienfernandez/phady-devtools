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
 * Phady\Security\Core\User\Factory\UserProviderFactoryInterface
 *
 * Interface
 */
interface UserProviderFactoryInterface
{
    public function create($id, $config);

    public function getKey();
}