<?php

namespace Spatie\ServerMonitor\Notifications\Senders;

use Spatie\ServerMonitor\Models\Check;

class Log implements Sender
{
  public function send(Check $check, array $config)
  {
      $title = $config['notification_title'] ?? config('server-monitor.notifications.notification_title');
      $name = getCheckerName($check, $config);
      $error = $check->message();

      $body = "$title : $name ($error)";

      \Log::critical($body);
  }
}
