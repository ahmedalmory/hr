<?php

namespace App\Http\Controllers\API;

use anlutro\LaravelSettings\Facades\Setting;
use App\Http\Controllers\Controller;
use App\Services\JodaResources\JodaResource;
use Illuminate\Http\Request;

class SettingsController extends JodaApiController
{

    protected $model = Setting::class;
    public function index()
    {
        $settings = Setting::all();

        return $this->jsonForm($settings);
    }

    public function store()
    {
        $request = request();


        foreach ($request->all() as $key => $value) {
            setting([$key => $value])->save();
        }

        return $this->jsonForm(Setting::all());
    }
}
