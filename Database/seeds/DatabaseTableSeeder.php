<?php
namespace VaahCms\Modules\Blog\Database\Seeds;


use Illuminate\Database\Seeder;

class DatabaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->seedBlogs();

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    function seedBlogs()
    {
        $list = [
            [
                'title' => 'This is a sample blog',
                'slug' => 'slug',
                'details' => 'details',

            ],
        ];


        foreach($list as $item)
        {
            $exist = \DB::table( 'vh_blog_posts' )
                ->where( 'slug', $item['slug'] )
                ->first();

            if (!$exist){
                \DB::table( 'vh_blog_posts' )->insert( $item );
            }
        }

    }


}
