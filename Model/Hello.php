<?php


namespace Dima\Hello\Model;


class Hello implements \Dima\Hello\Api\HelloInterface
{
    /**
     * @var Data\UserFactory
     */
    protected $_userFactory;

    /**
     * Hello constructor.
     * @param Data\UserFactory $userFactory
     */
    public function __construct(
        \Dima\Hello\Model\Data\UserFactory $userFactory
    )
    {
        $this->_userFactory = $userFactory;
    }

    /**
     * @inheritDoc
     */
    public function hello($name)
    {
        return "Hello, " . $name;
    }

    public function getUser()
    {
        $user = $this->_userFactory->create();
        $user->setId(99);
        $user->setFirstname('John');
        $user->setLastname('Doe');

        return $user;
    }
}
