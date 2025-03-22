<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('t_food', function (Blueprint $table) {
            $table->id();
            $table->string('ten'); // Tên món ăn
            $table->text('mo_ta')->nullable(); // Mô tả món ăn
            $table->decimal('gia', 10, 2); // Giá tiền
            $table->string('danh_muc'); // Danh mục món ăn
            $table->integer('so_luong')->default(0); // Số lượng mặc định là 0
            $table->string('hinh_anh')->nullable(); // Hình ảnh món ăn
            $table->timestamps(); // created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_food');
    }
};
