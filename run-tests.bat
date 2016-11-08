@echo off
set ORIGINAL_PATH=%PATH%
set VENDOR_BINDIR=%cd%\vendor\bin
IF NOT EXIST %VENDOR_BINDIR% GOTO EXIT_SCRIPT
set PATH=%ORIGINAL_PATH%;%VENDOR_BINDIR%

IF "$1"=="phpcs" CALL :PHPCS
IF "$1"=="phpcbf" CALL :PHPCBF

echo * Starting web server and web driver...
set /a PHP_PORT=%RANDOM%+25000
set /a PHANTOMJS_PORT=%PHP_PORT% + 1
start /min php -S 127.0.0.1:%PHP_PORT% %cd%\routing.php
start /min phantomjs --webdriver=%PHANTOMJS_PORT%
php -r "sleep(1);"

echo * Running tests...
codecept clean
codecept run %*
REM --coverage --coverage-xml --coverage-html

taskkill /F /IM php.exe
taskkill /F /IM phantomjs.exe
set PATH=%ORIGINAL_PATH%

:PHPCS
echo * Checking code for PSR-2 coding style standard...
shift 1
phpcs --standard=PSR2 --bootstrap=bootstrap/autoload.php \
    --exclude=PSR1.Classes.ClassDeclaration,PSR2.Methods.MethodDeclaration \
    --extensions=php %*
GOTO EXIT_SCRIPT

:PHPCBF
echo * Fixing code for PSR-2 coding style standard...
shift 1
phpcbf --standard=PSR2 --bootstrap=bootstrap/autoload.php --extensions=php %*

:EXIT_SCRIPT

REM PHP 7 Download Here!
REM -----------------------------------------------------------------------
REM http://windows.php.net/downloads/releases/php-7.0.12-Win32-VC14-x64.zip
REM https://xdebug.org/files/php_xdebug-2.4.1-7.0-vc14-x86_64.dll
