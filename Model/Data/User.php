<?php


namespace Dima\Hello\Model\Data;

use Magento\Framework\Model\AbstractModel;

class User extends AbstractModel implements \Dima\Hello\Api\Data\UserInterface
{
    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->getData($this::ID);
    }

    /**
     * @inheritDoc
     */
    public function setId($value)
    {
        $this->setData($this::ID, $value);
    }

    /**
     * @inheritDoc
     */
    public function getFirstname()
    {
        return $this->getData($this::FIRSTNAME);
    }

    /**
     * @inheritDoc
     */
    public function setFirstname($value)
    {
        $this->setData($this::FIRSTNAME, $value);
    }

    /**
     * @inheritDoc
     */
    public function getLastname()
    {
        return $this->getData($this::LASTNAME);
    }

    /**
     * @inheritDoc
     */
    public function setLastname($value)
    {
        $this->setData($this::LASTNAME, $value);
    }
}
