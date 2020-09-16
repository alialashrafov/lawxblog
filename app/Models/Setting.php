<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Setting extends Model
{
    protected $table = 'settings';
    protected $guarded = [];

    public function updateFromRequest(array $validated)
    {
        $this->assignCommonFields($validated);
        $this->uploadFile($validated);
        $this->update();
    }


    private function assignCommonFields($validated)
    {
        $this->facebook = $validated['facebook'];
        $this->twitter = $validated['twitter'];
        $this->youtube = $validated['youtube'];
        $this->google = $validated['google'];
        $this->address = $validated['address'];
        $this->description = $validated['description'];
        $this->email = $validated['email'];
        $this->phone = $validated['phone'];
    }

    private function uploadFile($validated)
    {
        if (!empty($validated['logo'])) {
            $img = $validated["logo"];
            $img_name = md5(time()) . '_' . Str::random(8) . "." . $img->getClientOriginalExtension();
            $img->move(public_path('logo'), $img_name);
            $this->logo = $img_name;
        }
    }


}
