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

namespace Phady\Messaging\Adapter;

use Phady\Messaging\Adapter\MessagingInterface;

/**
  * @class Phady\Messaging\Adapter\RabbitMQ - Messaging class for adapter rabbitmq
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Messaging
  * @copyright (c) 2015
  * @version 1.0.0
  */
class RabbitMQ implements MessagingInterface
{
    const RABBITMQ_MESSAGING = "rabbitmq";
	
    protected $config;
    protected $connection;

	public function __construct($config) {}

    /**
     * Get connection
     * @return MessagingAdapter Messaging Adapter
     */
    public function getConnection() {}

	/**
	 * @name getMessagingAdapter - get Messaging Adapter
	 * @return AMQPConnection
	 */
    public function getAdapter() {}

    /**
     * Send message to messaging system
     *
	 * @param string queue - Queue name
	 * @param string exchange - Exchange type
	 * @param string msg - Message
	 * @param string msgOptions - Message options
     * @return void
     */
    public function sendMessageDirect($queue, $exchange, $msg, $msgOptions) {}

    /**
     * @name getMessage - Get data message
     *
     * @param string data - Data Message
     * @param $options - Options
     * @return AMQPMessage
     */
    public function getMessage($data, $options) {}
}
