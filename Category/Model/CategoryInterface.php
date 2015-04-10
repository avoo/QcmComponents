<?php

namespace Qcm\Component\Category\Model;
use Doctrine\Common\Collections\Collection;
use Qcm\Component\Question\Model\QuestionInterface;

/**
 * Interface CategoryInterface
 */
interface CategoryInterface
{
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * Set name of category
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * Get name of category
     *
     * @return string
     */
    public function getName();

    /**
     * Set description
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get questions
     *
     * @return Collection
     */
    public function getQuestions();

    /**
     * Does a question belongs to category?
     *
     * @param QuestionInterface $question
     *
     * @return Boolean
     */
    public function hasQuestion(QuestionInterface $question);

    /**
     * Is there any questions in category?
     *
     * @return bool
     */
    public function hasQuestions();
    /**
     * Add a question to category
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function addQuestion(QuestionInterface $question);

    /**
     * Remove question from category
     *
     * @param QuestionInterface $question
     *
     * @return $this
     */
    public function removeQuestion(QuestionInterface $question);
}
