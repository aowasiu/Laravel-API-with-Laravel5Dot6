<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import the relevant classes
use App\Http\Requests;
use App\Pundiitarticle;
use App\Http\Resources\PundiitArticle as PundiitarticleResource;

class PundiitArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all articles
        $pundiitarticles = Pundiitarticle::paginate(15);

        //Return collection of articles as a resource
        return PundiitarticleResource::collection($pundiitarticles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pundiitarticle = $request->isMethod('put') ? Pundiitarticle::findOrFail($request->article_id) : new Pundiitarticle;

        $pundiitarticle->id = $request->input('article_id');
        $pundiitarticle->identity = $request->input('article_source');
        $pundiitarticle->name = $request->input('source_name');
        $pundiitarticle->author = $request->input('article_author');
        $pundiitarticle->title = $request->input('title');
        $pundiitarticle->body = $request->input('body');
        $pundiitarticle->url = $request->input('article_url');
        $pundiitarticle->imageUrl = $request->input('article_image');
        $pundiitarticle->publicationDate = $request->input('article_date');

        if ($pundiitarticle->save())
        {
            return new PundiitarticleResource($pundiitarticle);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get a particular PundiitArticle
        $pundiitarticle = Pundiitarticle::findOrFail($id);

        //Return the fetched Pundiit article as a resource
        return new PundiitarticleResource($pundiitarticle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get a particular PundiitArticle
        $pundiitarticle = Pundiitarticle::findOrFail($id);

        //Delete the fetched Pundiit article
        if($pundiitarticle->delete())
        {
            return new PundiitarticleResource($pundiitarticle);
        }
    }
}
