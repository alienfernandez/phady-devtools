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

namespace Phady\Mail;

/**
  * @class Phady\Mail\MailReader - This class is used to read and analyze IMAP mailboxes with features such as :
  * - Used to access plain text, html , headers and attachments of messages
  * - Read Message by date of receipt by the sender address messages .
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Mail
  * @copyright (c) 2015
  * @version 1.0.0
  */
class MailReader
{
   /**
    * Mail server to connect
    *
    * @$string
    */
   private $mailserver = "";

   /**
    * User mail server ej. xyz.abc@mail.com
    *
    * @$string
    */
   private $username = "";

   /**
    * User Password mail server
    *
    * @$string
    */
   private $password;

    /**
     * Port connection to the mail server
     *
     * @$integer
     */
    private $port;

    /**
     * Mailbox user input
     *
     * @$string
     */
    private $mailbox = "";

    /**
     * Conexion al servidor de correo
     *
     * @$resource IMAP stream as a connection
     */
    private $connection = null;

    /**
     * Contains items from header information
     *
     * @$Object
     */
    private $headers;

    /**
     * Associative array containing the attachment name as a key and the corresponding binary file as value.
     *
     * @$Array
     */
    private $attachments = [];

    /**
     * This variable contains the HTML part of a message .
     *
     * @$String
     */
    private $htmlBody = "";

    /**
     * Contains the plain text part of a message.
     *
     * @$String
     */
    private $plainBody = "";

    /**
     * Associative array containing attachments, HTMLBody , plainBody as their keys.
     * 
     * @$Array
     */
    private $result = [];

    /**
     * Constant Connection Port mail server ssl
     *
     * @$integer
     */
    const IMAP_PORT_SSL = 993;

    /**
     * Use constant ssl
     *
     * @$bool
     */
    const USE_SSL = true;

    /**
     * Constant Use ssl certificate no
     *
     * @$bool
     */
    const USE_NOVALIDATE_CERT_SSL = false;

    /**
     * Constant Try connecting the mail server three times
     *
     * @$bool
     */
    const TRY_TO_CONNECT = 3;

    /**
     * Option unread message
     *
     * @$bool
     */
    const UNREAD = 4;

    /**
     * Constant type of mail server
     *
     * @$string
     */
    const DEFAULT_SERVER_TYPE = "imap";

    /**
     * Constructor de la clase MailReader
     *
     * @param $username
     * @param $password
     * @param $mailserver
     * @param Array options - Array de opciones
     *                  ["serverType"] - Type access server messages stored on an Internet server ej. "imap" o "pop".
     *                  ["useSSL"] - If you are using secure communication with the server.
     *                  ["useNoValidateCertSSL"] - If the server does not have a valid certificate.
     *                  ["port"] - Port for communication with server.
     */
    public function __construct($username, $password, $mailserver = "imap.gmail.com", $options = []) {}
    
    /**
     * Function to connect to the specified email server .
     *
     * @return IMAP stream as a connection
     */
    public function setConnection() {}

    /**
     * Function to read messages and filter user
     *
     * @param Integer userInput
     * @param Integer filterType
     * @param $flag
     */
    public function readMessageByFilter($userInput, $filterType, $flag) {}

    /**
     * Date Posted format dd-mm-aaaa
     *
     * @param $date format Thu, 20 Aug 2009 15:55:52 +0530
     * @return $date format 08-20-2009
     */
    private function getRecDate($date) {}

    /**
     * This function is used to check the email id in particular present
     * The address of the header information . Returns true if present , otherwise false.
     *
     * @param $fromAddresses
     * @param $userInput
     * @return bool
     */
    private function containsFromAddress($fromAddresses, $userInput) {}

    /**
     * Function to get the message
     *
     * @param Integer messageId
     */
    public function getMessage($messageId) {}

    /**
     * Function to parse the message parts
     *
     * @param Integer messageId
     * @param Object partObj
     * @param Integer partno
     */
    public function getMessagePart($messageId, $partObj, $partno) {}

    /**
     * Function to parse the message
     *
     * @param Integer messageId
     */
    public function parseMessage($messageId) {}

    /**
     * Prepare message as array
     *
     */
    private function makeResult() {}

    /**
     * Function to parse the messages that have not yet been read .
     *
     */
    public function getUnreadMessages() {}
}
