<?php

namespace Qcm\Component\Question\Model;

use Doctrine\Common\Collections\Collection;
use Qcm\Component\Answer\Model\AnswerInterface;
use Qcm\Component\Category\Model\CategoryInterface;

/**
 * Interface QuestionInterface
 */
interface QuestionInterface
{
    const TYPE_CHOICE = 'choice';

    const TYPE_CHECKBOX = 'checkbox';

    const TYPE_TEXT = 'text';

    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * Set question name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * Get question name
     *
     * @return string
     */
    public function getName();

    /**
     * Set category
     *
     * @param CategoryInterface|null $category
     *
     * @return $this
     */
    public function setCategory(CategoryInterface $category = null);

    /**
     * Get question category
     *
     * @return CategoryInterface
     */
    public function getCategory();

    /**
     * Set type of question
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return string
     */
    public function getType();

    /**
     * Return list of types
     *
     * @return array
     */
    public function getTypes();

    /**
     * Set enabled
     *
     * @param bool $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * Set level of question
     *
     * @param integer $level
     *
     * @return $this
     */
    public function setLevel($level);

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel();

    /**
     * Get answers associated with this question
     *
     * @return AnswerInterface[]|Collection
     */
    public function getAnswers();

    /**
     * Does a answer belongs to question?
     *
     * @param AnswerInterface $answer
     *
     * @return Boolean
     */
    public function hasAnswer(AnswerInterface $answer);

    /**
     * Is there any answers in question?
     *
     * @return bool
     */
    public function hasAnswers();

    /**
     * Add a answer to question
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function addAnswer(AnswerInterface $answer);

    /**
     * Remove answer from question
     *
     * @param AnswerInterface $answer
     *
     * @return $this
     */
    public function removeAnswer(AnswerInterface $answer);
}
