<?php
/**
 * @author Peter Ukena <peterukena@googlemail.com>
 */

declare(strict_types=1);

namespace Kortwotze\FeedsPlugin\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        return $this->render('@KortwotzeFeedsPlugin/admin/dashboard.html.twig');
    }
}