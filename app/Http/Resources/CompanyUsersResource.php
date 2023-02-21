<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyUsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
       return [
         'id' => $this->id,
         'company_id' => $this->company_id,
         'user_pasport_seria' => $this->user_pasport_seria,
         'user_full_name' => $this->user_full_name,
         'user_postion' => $this->user_postion,
         'user_phone_number' => $this->user_phone_number,
         'user_address' => $this->user_address,
         'user_company' => $this->user_company,
       ];
    }
}