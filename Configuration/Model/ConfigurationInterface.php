<?php

namespace Qcm\Component\Configuration\Model;

/**
 * Class ConfigurationInterface
 */
interface ConfigurationInterface
{
    /**
     * Get max questions
     *
     * @return integer
     */
    public function getQuestionsMax();

    /**
     * Get question level max
     *
     * @return integer
     */
    public function getQuestionLevel();

    /**
     * Get max answers per question
     *
     * @return integer
     */
    public function getAnswersMax();

    /**
     * Checks whether the number of answers per question is strict
     *
     * @return boolean
     */
    public function isStrict();

    /**
     * Get timeout per question
     *
     * @return integer
     */
    public function getTimeoutPerQuestion();

    /**
     * Get timeout questionnaire
     *
     * @return integer
     */
    public function getTimeout();
}
