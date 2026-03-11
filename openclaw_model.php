<?php

use munkireport\models\MRModel as Eloquent;

class Openclaw_model extends Eloquent
{
    protected $table = 'openclaw';

    protected $hidden = ['id', 'serial_number'];

    protected $fillable = [
      'serial_number',
      'summary',
      'platform',
      'app',
      'cli',
      'cli_version',
      'state_dir',
      'config',
      'gateway_service',
      'gateway_port',
      'docker_container',
      'docker_image',

    ];
}
