<?php

namespace Qcm\Component\Answer\Checker;

/**
 * Interface AnswerCheckerLocatorInterface
 */
interface AnswerCheckerLocatorInterface
{
    /**
     * Get Known checker types
     * @return string[]
     */
    public function getTypes();

    /**
     * Is answer checker of type $type known?
     *
     * @param string $type
     *
     * @return boolean
     */
    public function has($type);

    /**
     * Get requested Answer Checker
     *
     * @param string $type
     *
     * @return AnswerCheckerInterface
     */
    public function get($type);
}
