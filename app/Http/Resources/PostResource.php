<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request); // agar tanha bam shewaya binuse awa hamu column akan aw id yat pshan ayat ka atawet

        return [              // agar bam shewaya binuse awa tanha aw 3 columna pshan aya
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }


    public function with($request){ // am methoda wata am du nrxakash bnera lagal datakan
        return [
            'version' => '1.0.0',
            'author_url' => url('https://testapiurl.com')
        ];
    }
}
