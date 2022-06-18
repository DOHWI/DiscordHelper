<?php

declare(strict_types=1);

/**
 * @name DiscordHelperExample
 * @main DOHWI\DiscordHelper\DiscordHelperExample
 * @api 4.0.0
 * @version 1.0.0
 * @author DOHWI
 */

namespace DOHWI\DiscordHelper;

use DOHWI\DiscordHelper\DiscordHelper;
use DOHWI\DiscordHelper\Element\Embed;
use DOHWI\DiscordHelper\Element\WebhookData;

use pocketmine\plugin\PluginBase;

final class DiscordHelperExample extends PluginBase
{
    protected function onEnable(): void
    {
        // NEW DISCORD HELPER
        $helper = new DiscordHelper('Enter Your Webhook URL');
        $helper->setUserName('Custom UserName');
        $helper->setContent('Your Content');

        // ADD EMBED
        $embed = new Embed();
        $embed->setTitle('Your Title');
        $embed->setDescription('Your Description');
        $helper->addEmbed($embed);

        // SEND
        $helper->send();
    }
}