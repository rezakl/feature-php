<?php
// This is global bootstrap for autoloading
//--require_once __DIR__ . '<your framework bootstrap file>';

// Setup environment configuration
$env_file = __DIR__ . '/../.env';
if (is_readable($env_file)) {
    $env = fopen($env_file, 'r');
    while(!feof($env)){
        $line = fgets($env);
        $arr_line = explode('=', $line);
        if (in_array($arr_line[0], ['ADMIN_TEST_EMAIL', 'ADMIN_TEST_PASSWORD'])) putenv(trim($line));
    }
    fclose($env);
}

// Boot configuration
if (class_exists('Codeception\Configuration')) {
    // Dynamic port configuration
    $PHP_PORT = !empty(getenv('PHP_PORT')) ? getenv('PHP_PORT') : '8000';
    $PHANTOMJS_PORT = !empty(getenv('PHP_PORT')) ? getenv('PHANTOMJS_PORT') : '4444';

    $modules_config = [
        'modules' => [
            'config' => [
                'WebDriver' => [
                    'url' => 'http://127.0.0.1:'. $PHP_PORT,
                    'host' => '127.0.0.1',
                    'port' => $PHANTOMJS_PORT,
                    'browser' => 'phantomjs',
                    'window_size' => 'maximize',
                    //'capabilities' => [],
                    'clear_cookies' => false,
                    'connection_timeout' => 10,
                    'request_timeout' => 30,

                ],
                'PhpBrowser' => [
                    'url' => 'http://127.0.0.1:'. $PHP_PORT,
                    'curl' => ['CURLOPT_RETURNTRANSFER' => true],
                    'verify' => false
                ]
            ]
        ],
        'coverage' => [
            'c3_url' => 'http://127.0.0.1:'. $PHP_PORT
        ]
    ];

    Codeception\Configuration::append($modules_config);
}
