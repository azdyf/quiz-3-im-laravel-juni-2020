<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArticleModel
{
    // Create
    public static function create($request)
    {

        $slug = Str::slug($request['title'], '-');

        return DB::table('articles')->insert([
            'title' => $request['title'],
            'content' => $request['content'],
            'slug' => $slug,
            'user_id' => 0,
            'created_at' => Carbon::now(),
        ]);
    }

    // Read
    public static function getAll()
    {
        return DB::table('articles')->get();
    }

    // Read By Id
    public static function getById($id)
    {
        return DB::table('articles')->where('id', $id)->first();
    }

    // Update
    public static function update($id, $request)
    {
        $slug = Str::slug($request['title'], '-');

        return DB::table('articles')
            ->where('id', $id)
            ->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'slug' => $slug,
                'updated_at' => Carbon::now(),
            ]);
    }

    // Delete
    public static function destroy($id)
    {
        return DB::table('articles')
            ->where('id', $id)
            ->delete($id);
    }
}
