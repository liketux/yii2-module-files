<?php

namespace liketux\files\logic;

/**
 * Class ClassnameEncoder
 * @package liketux\files\logic
 */
class ClassnameEncoder
{
    /**
     * @var string
     */
    private $encoded = "";

    /**
     * ClassnameEncoder constructor.
     * @param $className
     */
    public function __construct($className)
    {
        $this->encoded = str_replace("\\", "\\\\", $className);
    }

    /**
     * @return mixed|string
     */
    public function __toString()
    {
        return $this->encoded;
    }
}