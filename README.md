# CRACKTCHA
The reCAPTCHA implementation testing application. This is intended to be run as a web application and is purposefully insecure. This application demonstrates common flaws that developers make when implementing reCAPTCHA

Modify the config.php file in the tests folder to reflect your reCAPTCHA settings. Add your reCAPTCHA public and secret keys into this file.

Lessons are located in the "lesson" directory

Tests are located in the "tests" directory

CRACKTCHA provides 8 common reCAPTCHA bypass tests:

1.  reCAPTCHA bypass by not being validated client or server side
2.  reCAPTCHA bypass by not validating the request on the server
3.  reCAPTCHA bypass by "g-recaptcha-response" deletion
4.  reCAPTCHA bypass via GET not validated server side
5.  reCAPTCHA bypass via GET when "g-recaptcha-response" is deleted
6.  reCAPTCHA bypass via test accounts and hard coded keys
7.  reCAPTCHA bypass via valid session repeats
8.  reCAPTCHA bypass via pre-flight request integration

 Also includes reCAPTCHA implemented correctly



Use at own risk! Not associated with Google in anyway - this is intended to be a application security testing learning application

MIT License 2019 Collin Hart
