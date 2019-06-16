<?php

declare(strict_types=1);

namespace Kortwotze\FeedsPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class KortwotzeFeedsPlugin extends Bundle
{
    use SyliusPluginTrait;
}
