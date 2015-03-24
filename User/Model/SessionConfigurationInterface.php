<?php

namespace Qcm\Component\User\Model;

use Doctrine\Common\Collections\ArrayCollection;
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
     * Set time per question
     *
     * @param integer $timeout
     *
     * @return $this
     */
    public function setTimePerQuestion($timeout);

    /**
     * Get time per question
     *
     * @return integer
     */
    public function getTimePerQuestion();

    /**
     * Get categories associated with this user session
     *
     * @return CategoryInterface[]|ArrayCollection
     */
    public function getCategories();

    /**
     * Does a category belongs to user session?
     *
     * @param CategoryInterface $category
     *
     * @return Boolean
     */
    public function hasCategory(CategoryInterface $category);

    /**
     * Is there any categories in user session?
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
     * Remove category from user session
     *
     * @param CategoryInterface $category
     *
     * @return $this
     */
    public function removeCategory(CategoryInterface $category);

    /**
     * Get questions associated with this user session
     *
     * @return QuestionInterface[]|ArrayCollection
     */
    public function getQuestions();

    /**
     * Does a question belongs to user session?
     *
     * @param QuestionInterface $question
     *
     * @return Boolean
     */
    public function hasQuestion(QuestionInterface $question);

    /**
     * Is there any questions in user session?
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
     * Remove question from user session
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function removeQuestion(QuestionInterface $question);

    /**
     * Get answers
     *
     * @return array
     */
    public function getAnswers();

    /**
     * Does a answer belongs to user session?
     *
     * @param AnswerInterface $answer
     *
     * @return Boolean
     */
    public function hasAnswer(AnswerInterface $answer);

    /**
     * Is there any answer in user session?
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
     * Remove answer from user session
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function removeAnswer(AnswerInterface $answer);

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
