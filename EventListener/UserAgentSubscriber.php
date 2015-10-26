<?php

namespace JuanLuisGarciaBorrego\InfoLogBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class UserAgentSubscriber implements EventSubscriberInterface
{
    public function onKernelRequest()
    {
        die("Hi!!");
    }

    public static function getSubscribedEvents()
    {
        return array(
            'kernel.request' => 'onKernelRequest'
        );
    }
}