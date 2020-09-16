<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\Update;
use App\Http\Requests\Settings\Create;
use App\Http\Requests\Settings\Save;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function showUpdateForm(){
        $entry = Setting::all()->first();
        return view('admin.settings.form', compact('entry'));

    }

    public function update(Update $request, int $id){
        $validated = $request->validated();
        $settings = Setting::where('id',$id)->firstOrFail();

        $image_path = public_path().'/logo/'.$settings->logo;
        unlink($image_path);
        $settings->updateFromRequest($validated);
        return redirect()->back();
    }

}
