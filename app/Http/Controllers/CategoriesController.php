<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //

    public function show(Category $category,Request $request,Topic $topic)
    {

        //读取 分类ID关联的话题，每20条分页
        $topics=$topic->withOrder($request->order)
            ->where('category_id',$category->id)
            ->paginate(20);

//        $topics=Topic::where('category_id',$category->id)->paginate(20);
        //传参变量和分类到模板中
        return view('topics.index',compact('topics','category'));

    }
}
