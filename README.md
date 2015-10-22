# liveplayer-hosted-example
This example assumes that you use [composer](getcomposer.org) and have installed [PHP-JWT](https://github.com/firebase/php-jwt) and the [reCAPTCHA PHP client](https://github.com/google/ReCAPTCHA).

index.php is built from Google's reCAPTCHA example and is modified to insert an iframe that uses the hosted-liveplayer solution to display a stream. All customer specific parameters has been removed in the code so you will have to get an API key and secrect for the CAPTCHA and an API key, customer ID and match ID in order to actually fetch a stream and display it in the iframe.
