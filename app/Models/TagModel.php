<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TagModel
{
    // Create
    public static function save($request)
    {
        return DB::table('tags')->insert([
            'name' => $request['name'],
            'created_at' => Carbon::now(),
        ]);
    }

    // Read
    public static function getAll()
    {
        return DB::table('tags')->get();
    }

    // Read By Id
    public static function getById($id)
    {
        return DB::table('tags')->where('id', $id)->first();
    }

    // Update
    public static function update($id, $request)
    {
        return DB::table('tags')
            ->where('id', $id)
            ->update([
                'name' => $request['name'],
                'updated_at' => Carbon::now(),
            ]);
    }

    // Delete
    public static function destroy($id)
    {
        return DB::table('tags')
            ->where('id', $id)
            ->delete($id);
    }
}
