<?php

namespace Qcm\Component\User\Model;

use Qcm\Component\Answer\Model\AnswerInterface;
use Qcm\Component\Category\Model\CategoryInterface;
use Qcm\Component\Question\Model\QuestionInterface;

/**
 * Interface SessionConfigurationInterface
 */
interface SessionConfigurationInterface
{
    /**
     * Set date start
     *
     * @param \DateTime|null $date
     *
     * @return $this
     */
    public function setDateStart(\DateTime $date = null);

    /**
     * Get date start
     *
     * @return \DateTime|null
     */
    public function getDateStart();

    /**
     * Set date end
     *
     * @param \DateTime|null $date
     *
     * @return $this
     */
    public function setDateEnd(\DateTime $date = null);

    /**
     * Get date end
     *
     * @return \DateTime|null
     */
    public function getDateEnd();

    /**
     * Set max questions
     *
     * @param integer $number
     *
     * @return $this
     */
    public function setMaxQuestions($number);

    /**
     * Get max questions
     *
     * @return integer
     */
    public function getMaxQuestions();

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
     * Set questions
     *
     * @param array[CategoryInterface] $categories
     *
     * @return $this
     */
    public function setCategories($categories);

    /**
     * Get categories
     *
     * @return array
     */
    public function getCategories();

    /**
     * Add category
     *
     * @param CategoryInterface $category
     *
     * @return $this
     */
    public function addCategory(CategoryInterface $category);

    /**
     * Set questions
     *
     * @param array[QuestionInterface] $questions
     *
     * @return $this
     */
    public function setQuestions($questions);

    /**
     * Get questions
     *
     * @return array
     */
    public function getQuestions();

    /**
     * Add question
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function addQuestion(QuestionInterface $question);

    /**
     * Set answers
     *
     * @param array[AnswerInterface] $answers
     *
     * @return $this
     */
    public function setAnswers($answers);

    /**
     * Get answers
     *
     * @return array
     */
    public function getAnswers();

    /**
     * Add answer
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function addAnswer(AnswerInterface $answer);

    /**
     * Set start date
     *
     * @param \DateTime $date
     *
     * @return $this
     */
    public function setStartAt(\DateTime $date);

    /**
     * Get start date
     *
     * @return \Datetime
     */
    public function getStartAt();

    /**
     * Set end date
     *
     * @param \DateTime $date
     *
     * @return $this
     */
    public function setEndAt(\DateTime $date);

    /**
     * Get end date
     *
     * @return \Datetime
     */
    public function getEndAt();
}
