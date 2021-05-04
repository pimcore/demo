<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace App\Services;

use App\Model\CustomerManagementFramework\PasswordRecoveryInterface;
use Carbon\Carbon;
use CustomerManagementFrameworkBundle\CustomerProvider\CustomerProviderInterface;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use Pimcore\Mail;
use Pimcore\Model\Document\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PasswordRecoveryService
{
    /**
     * @var CustomerProviderInterface
     */
    protected $customerProvider;

    /**
     * @var UrlGeneratorInterface
     */
    protected $urlGenerator;

    /**
     * PasswordRecoveryService constructor.
     *
     * @param CustomerProviderInterface $customerProvider
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(CustomerProviderInterface $customerProvider, UrlGeneratorInterface $urlGenerator)
    {
        $this->customerProvider = $customerProvider;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param string $email
     * @param Email $emailDocument
     *
     * @return CustomerInterface|null
     *
     * @throws \Exception
     */
    public function sendRecoveryMail(string $email, Email $emailDocument): ?CustomerInterface
    {
        $customer = $this->customerProvider->getActiveCustomerByEmail($email);

        if ($customer instanceof PasswordRecoveryInterface) {

            //generate token
            $token = md5($customer->getId() . time() . uniqid());
            $customer->setPasswordRecoveryToken($token);
            $customer->setPasswordRecoveryTokenDate(Carbon::now());
            $customer->save();

            //send mail
            $mail = new Mail();
            $mail->setDocument($emailDocument);
            $mail->setParams([
                'customer' => $customer,
                'customerId' => $customer->getId(),
                'token' => $token,
                'tokenLink' => $this->urlGenerator->generate('account-reset-password', ['token' => $token]),
            ]);
            $mail->addTo($customer->getEmail());

            $mail->send();

            return $customer;
        }

        return null;
    }

    /**
     * @param string $token
     *
     * @return PasswordRecoveryInterface|null
     */
    public function getCustomerByToken(string $token): ?CustomerInterface
    {
        $customerList = $this->customerProvider->getList();
        $customerList->setCondition('passwordRecoveryToken = ?', [$token]);
        $customerList->setLimit(1);

        $customer = $customerList->current();
        if ($customer instanceof PasswordRecoveryInterface) {
            return $customer;
        }

        return null;
    }

    /**
     * @param string $token
     * @param string $newPassword
     */
    public function setPassword(string $token, string $newPassword)
    {
        $customer = $this->getCustomerByToken($token);
        $customer->setPassword($newPassword);
        $customer->setPasswordRecoveryTokenDate(null);
        $customer->setPasswordRecoveryToken(null);
        $customer->save();
    }
}
