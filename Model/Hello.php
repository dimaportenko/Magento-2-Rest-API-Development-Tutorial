<?php


namespace Dima\Hello\Model;


class Hello implements \Dima\Hello\Api\HelloInterface
{

    /**
     * @inheritDoc
     */
    public function hello($name)
    {
        return "Hello, " . $name;
    }
}
