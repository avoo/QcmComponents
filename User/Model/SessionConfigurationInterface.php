<?php

namespace Qcm\Component\User\Model;
use Qcm\Component\Question\Model\QuestionInterface;

/**
 * Interface SessionConfigurationInterface
 */
interface SessionConfigurationInterface
{
    /**
     * Set date start
     *
     * @param \DateTime $date
     *
     * @return $this
     */
    public function setDateStart(\DateTime $date);

    /**
     * Get date start
     *
     * @return \DateTime
     */
    public function getDateStart();

    /**
     * Set timeout
     *
     * @param integer $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout);

    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout();

    /**
     * Get questions
     *
     * @return mixed
     */
    public function getQuestions();

    /**
     * Has question
     *
     * @param QuestionInterface $question
     *
     * @return bool
     */
    public function hasQuestion(QuestionInterface $question);

    /**
     * Has questions
     *
     * @return bool
     */
    public function hasQuestions();

    /**
     * Add question
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function addQuestion(QuestionInterface $question);

    /**
     * Remove question
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function removeQuestion(QuestionInterface $question);
}
