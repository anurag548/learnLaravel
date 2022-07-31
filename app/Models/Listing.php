<?php 

    namespace App\Models;
    
    class Listing{
        public static function all(){
            return [[
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem Ipsum is simply dummy, Lorem Ipsum, aute irut non ante. Lorem Ipsum et'
            ], [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem Ipsum is simply dummy, Lorem Ipsum, aute irut non ante. Lorem Ipsum et'
            ]];
        }

        public static function find($id){


            $listings = self::all();
            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
            }
        }

    }
}