<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
    protected $guarded = [''];

    public function createFromRequest(array $validated)
    {
        $this->assignFields($validated);
    }

    private function assignFields($validated)
    {

        $this->name = $validated['name'];
        $this->subject = $validated['subject'];
        $this->email = $validated['email'];
        $this->website = $validated['website'];
        $this->message = $validated['message'];
    }


}
