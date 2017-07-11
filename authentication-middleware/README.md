# Authentication Middleware

This provides authentication middleware to a Slim 2 application.
The code uses the session from a system called the Portal.

The code is limited to php version 5.3.10.

## Usage

Instantiate the middleware to authenticate by Portal user group.
```angular2html
$authByGroup = new AuthenticationByUserGroupMiddleware($app, $authController);
```

Apply the middleware, using the isAdmin method.
```
$app->post('/myRoute', array($authByGroup, 'isAdmin'), function () use ($app) {
    // route code goes here...
});
```

Note:
The $authController contains legacy code that checks
the user's session and the groups they belong to.
It is not included in the code.
