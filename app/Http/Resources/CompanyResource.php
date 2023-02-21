<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
         'company_name' => $this->company_name,
         'boss_full_name' => $this->boss_full_name,
         'addres' => $this->addres,
         'email' => $this->email,
         'company_site' => $this->company_site,
         'phone_number' => $this->phone_number,
         'companyUsers' => CompanyUsersResource::collection($this->companyUsers),
       ];
    }
}