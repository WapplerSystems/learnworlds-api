<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Authentication;

class BearerAuthAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $token;
    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\RequestInterface
    {
        $header = sprintf('Bearer %s', $this->{'token'});
        $request = $request->withHeader('Authorization', $header);
        return $request;
    }
    public function getScope() : string
    {
        return 'BearerAuth';
    }
}
