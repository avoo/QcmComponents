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
     * Get time per question
     *
     * @return integer
     */
    public function getTimePerQuestion();

    /**
     * Get timeout questionnaire
     *
     * @return integer
     */
    public function getTimeout();
}
