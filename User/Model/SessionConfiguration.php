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
     * @var CategoryInterface[]|Collection
     */
    protected $categories;

    /**
     * @var QuestionInterface[]|Collection
     */
    public $questions;

    /**
     * @var AnswerInterface[]|Collection
     */
    public $answers;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->answers = new ArrayCollection();
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
     * Get categories
     *
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Has category
     *
     * @param CategoryInterface $category
     *
     * @return bool
     */
    public function hasCategory(CategoryInterface $category)
    {
        return $this->categories->contains($category);
    }

    /**
     * Has categories
     *
     * @return bool
     */
    public function hasCategories()
    {
        return !$this->categories->isEmpty();
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
        if (! $this->hasCategories($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    /**
     * Remove category
     *
     * @param CategoryInterface $category
     *
     * @return $this
     */
    public function removeCategory(CategoryInterface $category)
    {
        if ($this->hasCategories($category)) {
            $this->categories->removeElement($category);
        }

        return $this;
    }

    /**
     * Get questions
     *
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Has question
     *
     * @param QuestionInterface $question
     *
     * @return bool
     */
    public function hasQuestion(QuestionInterface $question)
    {
        return $this->questions->contains($question);
    }

    /**
     * Has questions
     *
     * @return bool
     */
    public function hasQuestions()
    {
        return !$this->questions->isEmpty();
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
        if (! $this->hasQuestion($question)) {
            $this->questions->add($question);
        }

        return $this;
    }

    /**
     * Remove question
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function removeQuestion(QuestionInterface $question)
    {
        if ($this->hasQuestion($question)) {
            $this->questions->removeElement($question);
        }

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
     * Has answer
     *
     * @param AnswerInterface $answer
     *
     * @return bool
     */
    public function hasAnswer(AnswerInterface $answer)
    {
        return $this->answers->contains($answer);
    }

    /**
     * Has answers
     *
     * @return bool
     */
    public function hasAnswers()
    {
        return !$this->answers->isEmpty();
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
        if (! $this->hasAnswer($answer)) {
            $this->answers->add($answer);
        }

        return $this;
    }

    /**
     * Remove answer
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function removeAnswer(AnswerInterface $answer)
    {
        if ($this->hasAnswer($answer)) {
            $this->answers->removeElement($answer);
        }

        return $this;
    }
}
