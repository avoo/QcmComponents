<?php
namespace Qcm\Component\Answer\Checker;

use Qcm\Component\Answer\Model\AnswerInterface;

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
     * @param array $answers
     * @param array $data
     *
     * @return array
     */
    public function getOptions($answers, $data);

    /**
     * Get checker name
     *
     * @return string
     */
    public function getName();
}
