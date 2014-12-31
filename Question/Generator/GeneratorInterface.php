<?php

namespace Qcm\Component\Question\Generator;

use Qcm\Component\User\Model\UserSessionInterface;

/**
 * Interface GeneratorInterface
 */
interface GeneratorInterface
{
    /**
     * Generate question pool
     *
     * @param UserSessionInterface $userSession
     */
    public function generate(UserSessionInterface $userSession);
}
