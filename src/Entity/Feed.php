<?php
/**
 * @author Peter Ukena <peterukena@googlemail.com>
 */

declare(strict_types=1);

namespace Kortwotze\FeedsPlugin\Entity;

use Sylius\Component\Resource\Model\TimestampableTrait;

class Feed implements FeedInterface
{
    use TimestampableTrait;

    /**
     * @var string
     */
    protected $id;

    /**  @return string  */
    public function getId(): string
    {
        return $this->id;
    }
}