<?php


namespace AppBundle\Model\CustomerManagementFramework;


use Carbon\Carbon;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;

interface PasswordRecoveryInterface
{

    /**
     * @param string $token
     * @return CustomerInterface
     */
    public function setPasswordRecoveryToken($token);

    /**
     * @return string
     */
    public function getPasswordRecoveryToken();

    /**
     * @param Carbon $tokenDate
     * @return CustomerInterface
     */
    public function setPasswordRecoveryTokenDate($tokenDate);

    /**
     * @return Carbon
     */
    public function getPasswordRecoveryTokenDate();

    /**
     * @return CustomerInterface
     */
    public function save();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $password
     * @return CustomerInterface
     */
    public function setPassword($password);
}