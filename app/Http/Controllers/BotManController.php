<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle(Request $request)
    {
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        $config = [];
        $botman = BotManFactory::create($config);

        $botman->hears('{message}', function (BotMan $bot, $message) {
            if (strtolower($message) == 'hi') {
                $bot->reply('Hello!');
            } else {
                $bot->reply("You wrote: " . $message);
            }
        });

        $botman->listen();
    }
}
