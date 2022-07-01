<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;
class TagController extends Controller
{
    public function index()
    {
        $result=Tag::all();

        return view('dashboard.seoTags.index',compact('result'));
    }
    public function create()
    {
        return view('dashboard.seoTags.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'key_words' => 'required',
            'robots' => 'required',
            'canonical' => 'required',
            'twitter_title' => 'required',
            'description' => 'required',
            'twitter_description' => 'required',
            'twitter_card' => 'required',
            'twitter_site' => 'required',
            'ogsite_title' => 'required',
            'ogsite_name' => 'required',
            'page_name' => 'required',

            'ogsite_description'=>'required',

        ]);
        Tag::create($request->all());

        return redirect()->route('tag-index')
            ->with('success', 'Seo Tags Created successfully.');






    }
    public function destroy($id)
    {

        $result=Tag::find($id);
        if($result)
        {
           $result->delete();
           return redirect()->route('tag-index')
            ->with('success', 'Seo Tags deleted successfully.');
        }
         return redirect()->route('tag-index')
            ->with('error', 'Seo Tags Record Not Found!.');


   }
   public function edit($id)
   {
    $result=Tag::find($id);
     return view('dashboard.seoTags.edit',compact('result'));
   }

   public function update(Request $request)
   {
     
      $result=Tag::where('id',$request->id)->first();
      if($result)
      {
        $result->ogsite_description=$request->ogsite_description;
        $result->ogsite_title=$request->ogsite_title;
        $result->ogsite_name=$request->ogsite_name;
        $result->page_name=$request->page_name;
        $result->twitter_description=$request->twitter_description;
        $result->twitter_card=$request->twitter_card;
        $result->twitter_site=$request->twitter_site;
        $result->title=$request->title;
        $result->key_words=$request->key_words;
        $result->robots=$request->robots;
        $result->canonical=$request->canonical;
        $result->twitter_title=$request->twitter_title;
        $result->description=$request->description;
        $result->update();
      }

      return redirect()->route('tag-index')
            ->with('success', 'Seo Tags Updated successfully.');
   }
}
