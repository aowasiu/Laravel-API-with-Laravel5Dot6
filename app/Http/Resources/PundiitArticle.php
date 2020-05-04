<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PundiitArticle extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //To retrieve all API column fields
        //return parent::toArray($request);

        //To retrieve selected column fields
        return [
            'id' => $this->id,
            'identity' => $this->identity,
            'name' => $this->name,
            'author' => $this->author,
            'title' => $this->title,
            'body' => $this->body,
            'url' => $this->url,
            'imageUrl' => $this->imageUrl,
            'publicationDate' => $this->publicationDate
        ];
    }

    //Assuming you want to add some other data to the returned data. Ths allows you to do practically anything.
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://www.wasiuadisa.com'),
        ];
    }    
}
