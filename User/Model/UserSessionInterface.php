<?php

namespace Qcm\Component\User\Model;

/**
 * Interface UserSessionInterface
 */
interface UserSessionInterface
{
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * Set user
     *
     * @param UserInterface $user
     *
     * @return $this
     */
    public function setUser(UserInterface $user);

    /**
     * Get user
     *
     * @return UserInterface
     */
    public function getUser();

    /**
     * Set the user configuration
     *
     * @param SessionConfigurationInterface|array $configuration
     *
     * @return mixed
     */
    public function setConfiguration($configuration);

    /**
     * Get the user configuration
     *
     * @return array
     */
    public function getConfiguration();
}
