<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Complaint extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // [
        //     'id' => $this->id,
        //     'c_title' => $this->c_title,
        //     'c_email' => $this->c_email,
        //     'user_id' => $this->user_id,
        //     'tracking_no' => $this->tracking_no,
        // ];
    }
}
