<?php

namespace Dima\Hello\Api\Data;

interface UserInterface {
    const ID = 'id';
    const FIRSTNAME = 'firstname';
    const LASTNAME = 'lastname';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param string $value
     * @return void
     */
    public function setFirstname($value);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param string $value
     * @return void
     */
    public function setLastname($value);
}
