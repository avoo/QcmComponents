<?php

namespace Qcm\Component\Question\Model;

use Qcm\Component\Category\Model\CategoryInterface;

/**
 * Interface QuestionInterface
 */
interface QuestionInterface
{
    const TYPE_RADIO = 'radio';

    const TYPE_CHECKBOX = 'checkbox';

    const TYPE_TEXT = 'text';

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
     * @param CategoryInterface $category
     *
     * @return $this
     */
    public function setCategory(CategoryInterface $category);

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
}
