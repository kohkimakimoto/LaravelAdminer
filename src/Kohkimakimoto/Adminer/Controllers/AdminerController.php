<?php
namespace Kohkimakimoto\Adminer\Controllers;

use Controller;
use Kohkimakimoto\Adminer\Facade\Adminer;

/**
 * Adminer Controller
 */
class AdminerController extends Controller
{
    public function index()
    {
        return Adminer::response();
    }
}
