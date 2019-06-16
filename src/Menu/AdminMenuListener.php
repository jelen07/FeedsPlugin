<?php
/**
 * @author Peter Ukena <peterukena@googlemail.com>
 */

declare(strict_types=1);

namespace Kortwotze\FeedsPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItem(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $marketingMenu = $menu->getChild('marketing');

        if ($marketingMenu instanceof ItemInterface) {
            $marketingMenu
                ->addChild('feeds', ['route' => 'kortwotze_feeds_plugin_admin_dashboard'])
                ->setLabel('kortwotze.feeds_plugin.menu.general_configuration')
                ->setLabelAttribute('icon', 'rss-square');
        }
    }
}