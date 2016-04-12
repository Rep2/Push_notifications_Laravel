<?php

namespace App\Http\Controllers;

use App\Device;
use App\Http\Controllers\Controller;
use Davibennun\LaravelPushNotification\Facades\PushNotification;


class NotificationTest extends Controller{


    public function send_notification(){

        $device = new Device;
        $device->token = "cea1c4754c9628e6b394e99549586cf678b116ac66f748f0ee1b75223b88137c";
        $device->device_type = "iOS";
        $device->version = "2.0";
        $device->save();

        PushNotification::app('notiticationIOS')
            ->to("cea1c4754c9628e6b394e99549586cf678b116ac66f748f0ee1b75223b88137c")
            ->send('Hello World, i`m a push message');


        return "Notification sent";
    }

}
