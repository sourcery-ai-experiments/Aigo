<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthData;
use PhpMqtt\Client\Facades\MQTT;
use PhpMqtt\Client\Exceptions\MqttException;
use PhpMqtt\Client\MQTTClient;
use Illuminate\Support\Facades\Log;

class MqttController extends Controller
{
    private $receivedMessages = [];

    public function publishMessage(Request $request)
    {
        $topic = 'Wzrd09';
        $payload = 'Wzrd@noLongerHuman';

        // Publish: QoS 0
        try {
            MQTT::publish($topic, $payload);
            Log::info('Message published successfully!');
            return response()->json(['message' => 'Message published successfully!']);
        } catch (MqttException $e) {
            Log::error('Error publishing message: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function subscribe(Request $request)
    {
        try {
            $client = MQTT::connection();

            // Subscribe: QoS 2
            $client->subscribe('Wzrd09', function (string $topic, string $message, bool $retained) use ($client) {
                \Log::info($message);
                $newMessage = new HealthData();
                $newMessage->content = $message;
                $newMessage->save();
                $client->interrupt();
            }, MqttClient::QOS_EXACTLY_ONCE);

            $client->loop(true);
            $client->disconnect();

            return view('welcome');
        } catch (MqttClientException $e) {
            $logger->error('Subscribing to a topic using QoS 2 failed. An exception occurred.', ['exception' => $e]);
        }
    }
}