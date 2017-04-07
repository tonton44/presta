<?php
class customercommentmodel extends ObjectModel
{
public $score;
public $id_customer;
public $comment;
public $date_add;
public static $definition= array(
 'table' => 'customer_comment',
 'primary' => 'id_customer_comment',
 'fields' => array(
 'score' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
 'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
 'comment' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
 'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate')
 ));
 }
?>
