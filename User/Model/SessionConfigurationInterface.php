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
     * Get categories
     *
     * @return mixed
     */
    public function getCategories();

    /**
     * Has category
     *
     * @param CategoryInterface $category
     *
     * @return bool
     */
    public function hasCategory(CategoryInterface $category);

    /**
     * Has categories
     *
     * @return bool
     */
    public function hasCategories();

    /**
     * Add category
     *
     * @param CategoryInterface $category
     *
     * @return $this
     */
    public function addCategory(CategoryInterface $category);

    /**
     * Remove category
     *
     * @param CategoryInterface $category
     *
     * @return $this
     */
    public function removeCategory(CategoryInterface $category);

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

    /**
     * Get answers
     *
     * @return mixed
     */
    public function getAnswers();

    /**
     * Has answer
     *
     * @param AnswerInterface $answer
     *
     * @return bool
     */
    public function hasAnswer(AnswerInterface $answer);

    /**
     * Has answers
     *
     * @return bool
     */
    public function hasAnswers();

    /**
     * Add answer
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function addAnswer(AnswerInterface $answer);

    /**
     * Remove answer
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function removeAnswer(AnswerInterface $answer);
}
