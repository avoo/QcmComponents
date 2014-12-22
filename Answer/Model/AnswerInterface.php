<?php

namespace Qcm\Component\Answer\Model;

use Qcm\Component\Question\Model\QuestionInterface;

/**
 * Interface AnswerInterface
 */
interface AnswerInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

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
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value);

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
