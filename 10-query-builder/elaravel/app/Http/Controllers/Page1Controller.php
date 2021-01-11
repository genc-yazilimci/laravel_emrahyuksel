<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Page1Controller extends Controller
{
    public function index()
    {

//        $blog=DB::table('blog')->get();
//        dd($blog);

//        $blog=DB::table('blog')->get();
//
//        foreach ($blog as $key)
//        {
//            echo $key->blog_title."<br>";
//        }

//        $blog = DB::table('blog')
//            ->where('blog_id', 3)
//            ->orwhere('blog_id', 4)
//            ->orwhere('blog_id', 1)
//            ->get();
//        dd($blog);


//        $blog = DB::table('blog')
//            ->whereBetween('blog_id', [1,3])
//            ->get();
//        dd($blog);


//        $blog = DB::table('blog')
//            ->whereNotBetween('blog_id', [1,3])
//            ->get();
//        dd($blog);

//
//        $blog = DB::table('blog')
//        ->whereNotIn('blog_id', [1,3])
//        ->get();
//        dd($blog);


//        $blog = DB::table('blog')
//            ->whereNull('blog_must')
//            ->get();
//        dd($blog);


//        $blog = DB::table('blog')
//            ->whereNotNull('blog_must')
//            ->get();
//        dd($blog);

//        $blog = DB::table('blog')
//            ->whereDate('blog_date','2019-10-05')
//            ->get();
//        dd($blog);

//        $blog = DB::table('blog')
//            ->whereMonth('blog_date','10')
//            ->get();
//        dd($blog);

//        $blog = DB::table('blog')
//            ->whereDay('blog_date','05')
//            ->get();
//        dd($blog);

//        $blog = DB::table('blog')
//            ->whereTime('blog_date','12:00:05')
//            ->get();
//        dd($blog);

//        $blog = DB::table('blog')
//            ->whereColumn('blog_title','blog_content')
//            ->get();
//        dd($blog);

//
//        $blog = DB::table('blog')
//            ->where('blog_id', 1)
//            ->value('blog_title');
//        echo $blog;


//        $blog = DB::table('blog')->find(1);
//        dd($blog);

//        $blog = DB::table('blog')
//            ->min('blog_must');
//        echo $blog;


//        $blog = DB::table('blog')
//            ->where('id', '5')
//            ->exists();
//        if ($blog) {
//            echo "Kayıt Var";
//        } else {
//            echo "Kayıt Yok";
//
//        }
//
//        $blog = DB::table('blog')
//            ->select(['blog_title','blog_content'])
//            ->get();
//        dd($blog);
//
//        $blog = DB::table('blog')
//            ->select(['blog_title as title','blog_content as content'])
//            ->get();
//        foreach($blog as $key)
//        {
//            echo $key->title."<br>";
//            echo $key->content."<br>";
//
//        }

//        $blog = DB::table('user')
//            ->join('blog','blog.user_id','=','user.id')
//            ->where('user.id','<',3)
//            ->get();
//     foreach ($blog as $key)
//     {
//         echo $key->user_name." - ".$key->blog_title."<br>";
//     }

//        $blog = DB::table('user')
//            ->orderBy('id','DESC')
//            ->offset(1)
//            ->limit(2)
//            ->get();
//        dd($blog);


//        $blog = DB::table('blog')->insert(
//           [
//               [
//                   'blog_title' => 'Blog Title 20',
//                   'blog_content' => 'Blog Content 07',
//                   'blog_must' => 10
//               ],
//               [
//                   'blog_title' => 'Blog Title 21',
//                   'blog_content' => 'Blog Content 08',
//                   'blog_must' => 11
//               ]
//           ]
//        );
//
//        echo $blog;

//        $blog = DB::table('blog')->insertGetId(
//            [
//                'blog_title' => 'Blog Title 25',
//                'blog_content' => 'Blog Content 25',
//                'blog_must' => 25
//            ]
//        );
//
//        echo $blog;

//        $blog = DB::table('blog')
//            ->where('id','1')
//            ->update(
//            [
//                'blog_title' => 'Blog Title 26'
//            ]
//        );
//
//        echo $blog;

//        $blog = DB::table('blog')
//            ->updateOrInsert(
//                [
//                    'blog_title' => 'Blog Title 32'
//                ],
//                [
//                    'blog_title' => 'Blog Title 32'
//                ]
//            );
//
//        echo $blog;


//        $blog = DB::table('blog')
//            ->increment('blog_must','2');
////        ->decrement('blog_must','2');
//
//        echo $blog;


//        $blog=DB::table('blog')
//            ->Where('id','22')
//            ->Delete();
//
//        echo $blog;

        $blog=DB::table('blog')
            ->truncate();

        echo $blog;
    }

    Create Read Update Delete
    Query Builder

    Create Read Update Delete
    Elequent ORM

}
