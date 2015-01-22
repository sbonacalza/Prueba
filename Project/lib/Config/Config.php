<?php

class Config {

    const CONFIG_FILE = "config/Configurations.ini";

    public function get($config)
    {
        $configData = parse_ini_file(BASE_PATH . self::CONFIG_FILE, true);

        return self::getConfig($config, $configData);
    }

    public function getConfigCredentials($config)
    {
        $configData = parse_ini_file(BASE_PATH . self::CREDENTIALS_CONFIG_FILE, true);

        return self::getConfig($config, $configData);
    }

    private function getConfig($config, $configData)
    {
        $parsedConfString = explode('.', $config);

        return $configData[$parsedConfString[0]][$parsedConfString[1]];
    }
} 