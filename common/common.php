<?php

/**
 * ddd
 */
function swooleVersion(): void
{
    echo sprintf("swoole-version: %s\n", swoole_version());
}