<?php

namespace App\Handlers;
use App\Models\User;
use Hashids;
use Illuminate\Support\Str;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField()
    {
        // if (auth()->check()) {
        //     dd(auth()->user()->id);
        //     return auth()->user()->id;
        // }

        $id = User::count() + 1;
        $id = Str::slug(Hashids::encode($id));

        return $id;
        // return parent::userField();
    }
}
