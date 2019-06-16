<?php
/**
 * @author Peter Ukena <peterukena@googlemail.com>
 */

declare(strict_types=1);

namespace Kortwotze\FeedsPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItem(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $feedsMenu = $menu
            ->addChild('new')
            ->setLabel('kortwotze.feeds_plugin.menu.section_title');

        $feedsMenu
            ->addChild('new-subitem', ['route' => 'kortwotze_feeds_plugin_admin_dashboard'])
            ->setLabel('kortwotze.feeds_plugin.menu.general_configuration');
    }
}