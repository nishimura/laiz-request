<?php

namespace Laiz\Request\Exception;

interface RedirectExceptionInterface
{
    /**
     * @return string|Zend\Uri\Uri
     */
    public function getUri();
}
