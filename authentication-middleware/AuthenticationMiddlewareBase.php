<?php

namespace systems\tmsservice\middleware\authentication;

use \Slim\Slim;

/**
 * Authentication Middleware Base Class - For building authentication rules.
 *
 * @author Sean Wallis <sean.wallis2@networkrail.co.uk>
 */
abstract class AuthenticationMiddlewareBase implements AuthenticationMiddlewareInterface
{
    /** @var Slim $app Application object. */
    protected $app;

    /**
     * Constructor - Pull in an instance of the Application.
     *
     * @param Slim $app
     */
    public function __construct(Slim $app)
    {
        $this->app = $app;
    }

    /**
     * Not Authenticated - Inform the user that they require authentication.
     *
     * @return \Slim\Http\Response
     */
    public function notAuthenticated()
    {
        $errorResponse = array(
            'message' => 'Requires authentication'
        );
        $this->app->response->headers->set('Content-Type', 'application/json; charset=utf-8;');
        $this->app->halt(401, json_encode($errorResponse, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        return $this->app->response;
    }
}
