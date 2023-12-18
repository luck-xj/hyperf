<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest\Event;

use Hyperf\Event\ConfigProvider;
use Hyperf\Event\EventDispatcherFactory;
use Hyperf\Event\ListenerProviderFactory;
use PHPUnit\Framework\TestCase;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\EventDispatcher\ListenerProviderInterface;

/**
 * @internal
 * @coversNothing
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\Hyperf\Event\ConfigProvider::class)]
class ConfigProviderTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame([
            'dependencies' => [
                ListenerProviderInterface::class => ListenerProviderFactory::class,
                EventDispatcherInterface::class => EventDispatcherFactory::class,
            ],
        ], (new ConfigProvider())());
    }
}
