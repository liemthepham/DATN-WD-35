<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('quan_ly', function (Blueprint $table) {
        $table->id();
        $table->string('ten_dang_nhap');
        $table->string('mat_khau');
        $table->string('ho_ten');
        $table->string('chuc_vu');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quan_ly');
    }
};
