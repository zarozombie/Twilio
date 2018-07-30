# Twilio API
this project is indended to create a php web app that utilizes the Twilio API. 

## Requirements
* [VS Code](https://code.visualstudio.com/) (or any other Code editor)
* [Xampp](https://www.apachefriends.org/index.html)
* [Ngrok](https://dashboard.ngrok.com/user/signup)
* [Composer](https://getcomposer.org/)
* [Twilio SDK](https://www.twilio.com/docs/libraries/php)
* [GitDesktop](https://desktop.github.com/)
* you will need credentials a sid and a token from Twilio

## Installation instructions
1. Install VS Code (or anyother code editor)
2. Install Xampp
3. Download Ngrok
```
extract files into a folder I keep it in the same folder as composer install
```
4. Download and Install Composer
```
I put the composer.exe file in the same location as Ngrok
When installing user all defaults "Just hit next on all prompts"
```
5. Use composer to install Twilio SDK.
```
open up cmd and path over to C:\xampp\php
enter this into cmd - composer require twilio/sdk
```
6. Install and set up GitDesktop
```
use default install "Just hit next on all prompts'
Set up Git Desktop by logging in and using File>Clone Repository (ctrl+shift+O)
use C:\xampp\htdocs as the local path

```
7. you will also need credentials a sid and token to run this api 
```
in this example I have created a file called twilio_config.php this is located at C:\xampp\htdocs

It has this code inside the file

<?php
$sid = 'your SID';
$token = "your Token";
$number = "your number"; //Include +1 i.e. +12223334444
$name = "your name"
$twilio_number = "Twilio Number" //Include +1 i.e. +12223334444;
?>
```
7. Launch Ngrok.exe
```
enter 
ngrok.exe http 80
```

8. Type http://127.0.0.1:4040 into web browser and see what you get

