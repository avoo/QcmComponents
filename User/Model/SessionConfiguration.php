<?php

namespace Qcm\Component\User\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Qcm\Component\Answer\Model\AnswerInterface;
use Qcm\Component\Category\Model\CategoryInterface;
use Qcm\Component\Question\Model\QuestionInterface;

/**
 * Class SessionConfiguration
 */
class SessionConfiguration implements SessionConfigurationInterface
{
    /**
     * @var \DateTime|null $datetime
     */
    public $dateStart;

    /**
     * @var \DateTime|null $datetime
     */
    public $dateEnd;

    /**
     * @var integer $timeout
     */
    public $timeout;

    /**
     * @var array $categories
     */
    public $categories;

    /**
     * @var array $questions
     */
    public $questions;

    /**
     * @var array $answers
     */
    public $answers;

    /**
     * @var integer $maxQuestions
     */
    public $maxQuestions;

    /**
     * @var \DateTime $startAt
     */
    public $startAt;

    /**
     * @var \DateTime $endAt
     */
    public $endAt;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->categories = array();
        $this->questions = array();
        $this->answers = array();
    }

    /**
     * Set date start
     *
     * @param \DateTime|null $date
     *
     * @return $this
     */
    public function setDateStart(\DateTime $date = null)
    {
        $this->dateStart = $date;

        return $this;
    }

    /**
     * Get date start
     *
     * @return \DateTime|null
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set date end
     *
     * @param \DateTime|null $date
     *
     * @return $this
     */
    public function setDateEnd(\DateTime $date = null)
    {
        $this->dateEnd = $date;

        return $this;
    }

    /**
     * Get date end
     *
     * @return \DateTime|null
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set max questions
     *
     * @param integer $number
     *
     * @return $this
     */
    public function setMaxQuestions($number)
    {
        $this->maxQuestions = $number;

        return $this;
    }

    /**
     * Get max questions
     *
     * @return integer
     */
    public function getMaxQuestions()
    {
        return $this->maxQuestions;
    }

    /**
     * Set timeout
     *
     * @param integer $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set questions
     *
     * @param array[CategoryInterface] $categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add category
     *
     * @param CategoryInterface $category
     *
     * @return $this
     */
    public function addCategory(CategoryInterface $category)
    {
        if (!in_array($category->getId(), $this->categories)) {
            $this->categories[] = $category->getId();
        }

        return $this;
    }

    /**
     * Set questions
     *
     * @param array[QuestionInterface] $questions
     *
     * @return $this
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return array
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add question
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function addQuestion(QuestionInterface $question)
    {
        if (!in_array($question->getId(), $this->questions)) {
            $this->questions[] = $question->getId();
        }

        return $this;
    }

    /**
     * Set answers
     *
     * @param array[AnswerInterface] $answers
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Get answers
     *
     * @return mixed
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Add answer
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function addAnswer(AnswerInterface $answer)
    {
        if (!in_array($answer->getId(), $this->answers)) {
            $this->answers[] = $answer->getId();
        }

        return $this;
    }

    /**
     * Set start date
     *
     * @param \DateTime $date
     *
     * @return $this
     */
    public function setStartAt(\DateTime $date)
    {
        $this->startAt = $date;

        return $this;
    }

    /**
     * Get start date
     *
     * @return \Datetime
     */
    public function getStartAt()
    {
        return $this->startAt;
    }

    /**
     * Set end date
     *
     * @param \DateTime $date
     *
     * @return $this
     */
    public function setEndAt(\DateTime $date)
    {
        $this->endAt = $date;

        return $this;
    }

    /**
     * Get end date
     *
     * @return \Datetime
     */
    public function getEndAt()
    {
        return $this->endAt;
    }
}
