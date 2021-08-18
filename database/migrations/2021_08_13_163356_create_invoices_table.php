<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Decimal;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('transmitter');
            $table->string('transmitter_name');
            $table->string('customer');
            $table->string('customer_name');
            $table->string('folio')->unique();
            $table->string('pac');
            $table->decimal('total',10,2)->default(0);
            $table->string('efecto');
            $table->string('estado');
            $table->string('status');
            $table->string('recaptcha',5);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
