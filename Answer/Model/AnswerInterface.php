<?php

namespace Qcm\Component\Category\Model;
use Qcm\Component\Question\Model\QuestionInterface;

/**
 * Interface AnswerInterface
 */
interface AnswerInterface
{
    /**
     * Set question
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function setQuestion(QuestionInterface $question);

    /**
     * Get question
     *
     * @return QuestionInterface
     */
    public function getQuestion();

    /**
     * Set value
     *
     * @param string $name
     *
     * @return $this
     */
    public function setValue($name);

    /**
     * Get value
     *
     * @return string
     */
    public function getValue();

    /**
     * Set is valid
     *
     * @param bool $valid
     *
     * @return $this
     */
    public function setValid($valid);

    /**
     * Get is valid
     *
     * @return bool
     */
    public function isValid();
}
