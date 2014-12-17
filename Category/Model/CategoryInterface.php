<?php

namespace Qcm\Component\Category\Model;

/**
 * Interface CategoryInterface
 */
interface CategoryInterface
{
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
}
