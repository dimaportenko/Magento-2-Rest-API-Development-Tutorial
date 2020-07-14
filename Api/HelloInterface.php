<?php

namespace Dima\Hello\Api;

interface HelloInterface {

    /**
     * Hello Api
     *
     * @param string $name
     * @return string
     */
    public function hello($name);

    /**
     * @return \Dima\Hello\Api\Data\UserInterface
     */
    public function getUser();
}
