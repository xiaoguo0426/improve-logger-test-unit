<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Cache\Driver;

use Psr\Container\ContainerInterface;
use Psr\SimpleCache\CacheInterface;

interface DriverInterface extends CacheInterface
{
    public function __construct(ContainerInterface $container, array $config);

    public function getAnnotationValue(string $className, string $method, array $arguments);
}
