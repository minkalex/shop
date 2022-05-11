<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'customer_id');
            $table->foreignIdFor(User::class, 'responsible_id')->nullable();
            $table->integer('amount');
            $table->integer('discount')->nullable();
            $table->enum('discount_type', ['amount', 'percent'])->nullable();
            $table->enum('payment_type', ['cash', 'cashless']);
            $table->enum('status', ['new', 'in_process', 'canceled', 'done']);
            $table->string('comment', '1024')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
