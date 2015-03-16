<?php
namespace Qcm\Component\Answer\Checker;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface AnswerCheckerInterface
 */
interface AnswerCheckerInterface
{
    /**
     * Get field type
     *
     * @return string
     */
    public function getType();

    /**
     * Get checker options
     *
     * @param ArrayCollection $answers
     *
     * @return array
     */
    public function getOptions(ArrayCollection $answers);

    /**
     * Get checker name
     *
     * @return string
     */
    public function getName();
}
