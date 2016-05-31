<?php

namespace PhpGpio\Bundle\PhpGpioBundle\Provider;

/**
 * Server provider interface
 */
interface ProviderInterface
{
    /**
     * Return true if given token is accepted by provider
     *
     * @param string $token
     *
     * @return bolean
     */
    public function accept($token);

    /**
     * Execute request
     *
     * @param string $token
     * @param array  $arguments
     *
     * @throws \InvalidArgumentException
     *
     * @return boolean TRUE if execution successfull
     */
    public function execute($token, array $arguments);
}
