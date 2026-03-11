<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class OpenclawInit extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('openclaw', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number');
            $table->boolean('summary')->nullable();
            $table->text('platform')->nullable();
            $table->text('app')->nullable();
            $table->text('cli')->nullable();
            $table->text('cli_version')->nullable();
            $table->text('state_dir')->nullable();
            $table->text('config')->nullable();
            $table->text('gateway_service')->nullable();
            $table->text('gateway_port')->nullable();
            $table->text('docker_container')->nullable();
            $table->text('docker_image')->nullable();

            $table->unique('serial_number');
            $table->index('summary');
            $table->index('platform');
            $table->index('app');
            $table->index('cli');
            $table->index('cli_version');
            $table->index('state_dir');
            $table->index('config');
            $table->index('gateway_service');
            $table->index('gateway_port');
            $table->index('docker_container');
            $table->index('docker_image');

        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('openclaw');
    }
}
