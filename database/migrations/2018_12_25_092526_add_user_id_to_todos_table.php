<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //php artisan migrate コマンドで実行される
    public function up()//で変更を行う操作
    {
        // 既存のテーブルを更新するためにSchemファサードのtableメソッドを使用しているtable('テーブルの名前',function(Blueprint $table))
        Schema::table('todos', function (Blueprint $table) {
            $table->integer('user_id');  // 追記
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // php artisan migrate:rollback コマンドで実行される
    public function down()//upで行った操作を戻す操作・一つ前の状態に戻す
    {
        Schema::table('todos', function (Blueprint $table) {
            // $table->integer('user_id');  // 追記
        });
    }
}
