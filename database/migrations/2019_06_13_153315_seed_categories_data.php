<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'          => '分享',
                'description'   => '分享创造,分享发现,分享经验',
            ],
            [
                'name'          => '教程',
                'description'   => '开发技巧,推荐方法,约定规范',
            ],
            [
                'name'          => '问答',
                'description'   => '保持友善,互帮互助,共同成长',
            ],
            [
                'name'          => '公告',
                'description'   => '站点公告',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
