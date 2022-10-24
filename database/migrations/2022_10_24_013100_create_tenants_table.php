<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('tenant_lot_number', 20);
            $table->foreignUuid('zone_id')->references('id')->on('zones')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tenant_name');
            $table->string('tenant_description')->nullable();
            $table->timestamps();

            $table->unique(['tenant_lot_number', 'zone_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
