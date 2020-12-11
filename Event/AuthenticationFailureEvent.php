<?php

declare(strict_types=1);

namespace Trikoder\Bundle\OAuth2Bundle\Event;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * @author Benoit VIGNAL <github@benoit-vignal.fr>
 */
class AuthenticationFailureEvent extends Event
{
    /**
     * @var AuthenticationException
     */
    protected $exception;

    /**
     * @var Response
     */
    protected $response;

    public function __construct(AuthenticationException $exception, Response $response)
    {
        $this->exception = $exception;
        $this->response = $response;
    }

    public function getException(): AuthenticationException
    {
        return $this->exception;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }

    public function setResponse(Response $response): void
    {
        $this->response = $response;
    }
}