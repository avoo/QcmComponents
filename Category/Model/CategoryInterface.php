<?php

namespace Qcm\Component\Category\Model;

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
}
