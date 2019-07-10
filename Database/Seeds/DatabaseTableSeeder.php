<?php
namespace VaahCms\Themes\BtFourPointThree\Database\Seeds;


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
        $this->locations();
        $this->blocks();
        $this->templates();
    }

    /**
 * Run the database seeds.
 *
 * @return void
 */
    function locations()
    {



        $theme = \DB::table( 'vh_themes' )
            ->where( 'slug', 'btfourpointthree' )
            ->first();

        if(!$theme)
        {
            return false;
        }

        $list = [
            [
                'type' => 'menu',
                'name' => 'Top Menu',
            ],
            [
                'type' => 'menu',
                'name' => 'Footer Menu',
            ],
        ];


        foreach($list as $item)
        {
            $item['slug'] = str_slug($item['name']);

            $exist = \DB::table( 'vh_theme_locations' )
                ->where( 'vh_theme_id', $theme->id )
                ->where( 'slug', $item['slug'] )
                ->first();

            if (!$exist){

                $item['vh_theme_id'] = $theme->id;


                \DB::table( 'vh_theme_locations' )->insert( $item );
            }
        }

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    function blocks()
    {



        $theme = \DB::table( 'vh_themes' )
            ->where( 'slug', 'btfourpointthree' )
            ->first();

        if(!$theme)
        {
            return false;
        }

        $list = [
            [
                'name' => 'Features',
            ],
            [
                'name' => 'Sign In Features',

            ],
        ];


        foreach($list as $item)
        {
            $item['slug'] = str_slug($item['name']);
            $exist = \DB::table( 'vh_theme_blocks' )
                ->where( 'vh_theme_id', $theme->id )
                ->where( 'slug', $item['slug'] )
                ->first();

            if (!$exist){

                $item['vh_theme_id'] = $theme->id;

                \DB::table( 'vh_theme_blocks' )->insert( $item );
            }
        }

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    function templates()
    {



        $theme = \DB::table( 'vh_themes' )
            ->where( 'slug', 'btfourpointthree' )
            ->first();

        if(!$theme)
        {
            return false;
        }

        $list = [
            [
                'type' => 'page',
                'name' => 'Default',
            ],
            [
                'type' => 'page',
                'name' => 'Home',
            ],
        ];


        foreach($list as $item)
        {
            $item['slug'] = str_slug($item['name']);
            $exist = \DB::table( 'vh_theme_templates' )
                ->where( 'vh_theme_id', $theme->id )
                ->where( 'slug', $item['slug'] )
                ->first();

            if (!$exist){

                $item['vh_theme_id'] = $theme->id;

                \DB::table( 'vh_theme_templates' )->insert( $item );
            }
        }

    }

}
