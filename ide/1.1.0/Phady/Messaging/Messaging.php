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

namespace Phady\Messaging;

use Phady\Messaging\Adapter\RabbitMQ;

/**
  * @class Phady\Messaging\Messaging - Messaging class for
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Messaging
  * @copyright (c) 2015
  * @version 1.0.0
  */
class Messaging
{
    const RABBITMQ_MESSAGING = "rabbitmq";
    protected $config;
    protected $connection;

    /**
     * Get connection
     * @return MessagingAdapter Messaging Adapter
     */
    public function getConnection() {}

	/**
	 * @name getMessagingAdapter - get Messaging Adapter
	 * @return string
	 */
    public function getMessagingAdapter() {}
}
