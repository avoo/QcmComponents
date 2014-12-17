<?php

namespace Qcm\Component\User\Model;

use Qcm\Component\Question\Model\QuestionInterface;

/**
 * Interface UserAnswerInterface
 */
interface UserAnswerInterface
{
    /**
     * Set user
     *
     * @param UserInterface $user
     *
     * @return $this
     */
    public function setUser(UserInterface $user);

    /**
     * Get user
     *
     * @return UserInterface
     */
    public function getUser();

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
     * Set answers
     *
     * @param mixed $answers
     *
     * @return $this
     */
    public function setAnswers($answers);

    /**
     * Get answers
     *
     * @return mixed
     */
    public function getAnswers();
}
