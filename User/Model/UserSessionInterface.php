<?php

namespace Qcm\Component\User\Model;

/**
 * Interface UserSessionInterface
 */
interface UserSessionInterface
{
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
     * @param SessionConfigurationInterface $configuration
     *
     * @return mixed
     */
    public function setConfiguration(SessionConfigurationInterface $configuration);

    /**
     * Get the user configuration
     *
     * @return SessionConfigurationInterface
     */
    public function getConfiguration();
}
