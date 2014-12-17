<?php

namespace Qcm\Component\User\Model;

/**
 * Interface UserManagerInterface
 */
interface UserManagerInterface
{
    /**
     * Returns the user's fully qualified class name.
     *
     * @return string
     */
    public function getClass();

    /**
     * Finds one user by the given criteria.
     *
     * @param array $criteria
     *
     * @return UserManagerInterface
     */
    public function findUserBy(array $criteria);

    /**
     * Find a user by its username.
     *
     * @param string $username
     *
     * @return UserManagerInterface or null if user does not exist
     */
    public function findUserByUsername($username);

    /**
     * Update password
     *
     * @param UserInterface $user
     *
     * @return void
     */
    public function updatePassword(UserInterface $user);
}
