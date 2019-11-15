# php-auth
A simple authentication system

## Testing the API
A very quick way to testing the API is by using Postman. <br>
But before that, you need to set up the project on your local machine.

## Let's get started
Clone this repo by entering the following in your command line:
```
git clone https://github.com/Shegsdev/php-auth.git
```
Inside the 'php-auth/api/' folder, rename the `env.example.php` file to `env.php`.
Input all required credentials and make sure all is working correctly.

## Signup API
Open up Postman and test register endpoint:
---
*Request*: \POST
```
http://{hostname}:{port}/php-auth/api/register.php
```
*Body*:
```
{
    "firstname": "Lake",
    "lastname": "Wood",
    "email": "email@email.com",
    "password": "12345"
}
```

If everything worked correctly, you should get a response like so:
---
*Response*:
```
{
    "message": "User created successfully."
}
```

## Login API

*Request*: \POST
```
http://{hostname}:{port}/php-auth/api/login.php
```
*Body*:
```
{
    "email": "email@email.com",
    "password": "12345"
}
```
If everything worked correctly, you should get a response like so:
---
*Response*:
```
{
    "message": "Successful login.",
    "jwt": "looooooooo*****************ng json token"
}
```

## Verifying token API
Token verification helps to confirm if a user session is still valid and if the token has not expired. <br>
*Request*: \POST
```
http://{hostname}:{port}/php-auth/api/verify_token.php
```
*Body*:
```
{
    "jwt": "generated token after login"
}
```
If everything worked correctly, you should get a response like so:
---
*Response*:
```
{
    "message": "Access granted.",
    "data": {
        "id": "1",
        "firstname": "Lake",
        "lastname": "Wood",
        "email": "email@email.com"
    }
}
```