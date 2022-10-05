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
            $table->foreignIdFor(User::class, 'customer_id')->constrained('users');
            $table->foreignIdFor(User::class, 'responsible_id')->nullable()->constrained('users');
            $table->integer('amount');
            $table->integer('discount')->nullable();
            $table->foreignId('discounts_types_id')->nullable()->constrained();
            $table->foreignId('deliveries_types_id')->constrained();
            $table->foreignId('payments_types_id')->constrained();
            $table->foreignId('statuses_types_id')->constrained();
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
