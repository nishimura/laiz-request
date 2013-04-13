<?php

namespace Laiz\Request;

use Laiz\Request\Exception\RedirectExceptionInterface;
use Zend\Http\PhpEnvironment\Request;
use Zend\Http\PhpEnvironment\Response;
use Zend\Uri\Uri;
use InvalidArgumentException;

class Util
{
    public static function handleRedirectException(RedirectExceptionInterface $e, Request $request = null)
    {
        $location = $e->getUri();
        $Response = new Response();
        if ($location instanceof Uri){
            $uri = $location;
        }else if (is_string($location)){
            $uri = new Uri($location);
        }else{
            throw new InvalidArgumentException('Unknown type: ' . var_export($location, true));
        }
        $Response->getHeaders()->addHeaderLine('Location', $uri->toString());
        $Response->setStatusCode(302);
        $Response->send();
    }
}
