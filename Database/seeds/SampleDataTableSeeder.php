<?php
namespace VaahCms\Themes\BtFourPointThree\Database\Seeds;


use Illuminate\Database\Seeder;

class SampleDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->seedPosts();

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    function seedPosts()
    {
        $list = [
            [
                'name' => 'Theme Sample Page',
                'title' => 'Theme sample page',
                'slug' => 'theme-sample-page',
                'content' => 'Theme Sample Content',
                'status' => 'draft',
                'published_at' => null,

            ],
        ];

        foreach($list as $item)
        {
            $exist = \DB::table( 'vh_cms_pages' )
                ->where( 'slug', $item['slug'] )
                ->first();

            if (!$exist){
                \DB::table( 'vh_cms_pages' )->insert( $item );
            }
        }

    }


}
