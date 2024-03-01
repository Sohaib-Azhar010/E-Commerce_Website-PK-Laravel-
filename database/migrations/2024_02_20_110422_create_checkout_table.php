<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('billingemail');
            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('billingaddress');
            $table->string('shippingaddress');
            $table->string('cellno');
            $table->string('zipcode');
            $table->string('paymentmethod');
            $table->string('subtotal');
            $table->string('shipping');
            $table->string('total');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
};
