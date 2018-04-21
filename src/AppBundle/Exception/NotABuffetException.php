<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 15-4-18
 * Time: 16:36
 */

namespace AppBundle\Exception;


class NotABuffetException extends \Exception
{
    protected $message = 'Please do not mix the carnivorous and non-carnivorous dinosaurs. It will be messy!';
}