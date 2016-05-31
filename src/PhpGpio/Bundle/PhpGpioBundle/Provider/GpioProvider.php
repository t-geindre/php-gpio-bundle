<?php

namespace PhpGpio\Bundle\PhpGpioBundle\Provider;

class GpioProvider extends AbstractProvider
{
    const TOKEN = 'gpio';

    /**
     * {@inheritdoc}
     */
    public function accept($token)
    {
        return $token == self::TOKEN;
    }

    /**
     * {@inheritdoc}
     */
    public function execute($token, array $arguments)
    {

    }
}
