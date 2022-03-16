<?php

namespace Spatie\ServerMonitor\Notifications;

use Spatie\ServerMonitor\Models\Check;

interface Sender
{
  /**
   * Sends notificatin/alert message.
   *
   * @param Check $check
   * @param array $config
   * @return mixed
   */
  public function send(Check $check, array $config);
}
