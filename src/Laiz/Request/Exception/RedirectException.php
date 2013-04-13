<?php

namespace Laiz\Request\Exception;

use \Exception;

class RedirectException extends Exception implements RedirectExceptionInterface
{
    private $uri;

    /**
     * @param string|Zend\Uri\Uri $uri
     */
    public function __construct($uri)
    {
        parent::__construct($uri);
        $this->uri = $uri;
    }

    /**
     * @return string|Zend\Uri\Uri $uri
     */
    public function getUri()
    {
        return $this->uri;
    }
}
