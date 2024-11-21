<?php
declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace App\EventListener;

use Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener;
use Pimcore\Model\User;
use Symfony\Component\HttpFoundation\Request;

/**
 * @internal
 */
class UserSessionPerspectiveListener extends UserPerspectiveListener
{
    protected function setRequestedPerspective(User $user, Request $request): void
    {
        // update perspective settings
        $requestedPerspective = $request->get('perspective');
        $sessionPerspective = $request->getSession()->get('sessionPerspective');

        if ($requestedPerspective) {
            if ($requestedPerspective !== $sessionPerspective) {
                $existingPerspectives = array_keys(\Pimcore\Bundle\AdminBundle\Perspective\Config::get());
                if (!in_array($requestedPerspective, $existingPerspectives)) {
                    $this->logger->warning('Requested perspective {perspective} for {user} does not exist.', [
                        'user' => $user->getName(),
                        'perspective' => $requestedPerspective,
                    ]);

                    $requestedPerspective = null;
                }
            }
        }

        if (!$requestedPerspective || !$user->isAllowed($requestedPerspective, 'perspective')) {
            $previouslyRequested = $requestedPerspective;

            // if the session perspective is not allowed anymore, set the first available
            if ($sessionPerspective) {
                $requestedPerspective = $user->isAllowed($sessionPerspective, 'perspective')
                    ? $sessionPerspective
                    : $user->getFirstAllowedPerspective();
            } else {
                $requestedPerspective = 'default';
            }

            if ($previouslyRequested) {
                $this->logger->warning('User {user} is not allowed requested perspective {requestedPerspective}. Falling back to {perspective}.', [
                    'user' => $user->getName(),
                    'requestedPerspective' => $previouslyRequested,
                    'perspective' => $requestedPerspective,
                ]);
            } else {
                $this->logger->debug('Perspective for user {user} was not requested. Falling back to {perspective}.', [
                    'user' => $user->getName(),
                    'perspective' => $requestedPerspective,
                ]);
            }
        }

        if ($requestedPerspective !== $sessionPerspective) {
            $request->getSession()->set('sessionPerspective', $requestedPerspective);

            $user->setActivePerspective($requestedPerspective);
            $user->save();
        } elseif ($sessionPerspective) {
            $user->setActivePerspective($sessionPerspective);
            $user->save();
        }
    }
}
