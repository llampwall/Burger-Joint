<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialSetting;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function general() {
        $id = 1;
        $generalsetting = GeneralSetting::find($id);
        return view('admin/settings/general', [
            'generalsetting' => $generalsetting
        ]);
    }
        
    public function saveGeneral() {
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'logo_image_url' => ['required', 'string'],
            'address1' => ['required', 'string'],
            'address2' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zip' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);
        $id = 1;
        $generalsetting = GeneralSetting::find($id);
        $generalsetting->site_title = request('site_title');
        $generalsetting->logo_image_url = request('logo_image_url');
        $generalsetting->address1 = request('address1');
        $generalsetting->address2 = request('address2');
        $generalsetting->city = request('city');
        $generalsetting->state = request('state');
        $generalsetting->zip = request('zip');
        $generalsetting->phone_number = request('phone_number');
        $generalsetting->save();
        return redirect('/admin');
    }



    public function seo() {
        $id = 1;
        $seosetting = SeoSetting::find($id);
        return view('admin/settings/seo', [
            'seosetting' => $seosetting
        ]);
    }
        
    public function saveSeo() {
        request()->validate([
            'description' => ['required', 'string', 'max:255'],
            'keywords' => ['required', 'string'],
        ]);
        $id = 1;
        $seosetting = SeoSetting::find($id);
        $seosetting->description = request('description');
        $seosetting->keywords = request('keywords');
        $seosetting->save();
        return redirect('/admin');
    }



    public function social() {
        $id = 1;
        $socialsetting = SocialSetting::find($id);
        return view('admin/settings/social', [
            'socialsetting' => $socialsetting
        ]);
    }
        
    public function saveSocial() {
        request()->validate([
            'facebook_url' => ['required', 'string'],
            'twitter_url' => ['required', 'string'],
            'instagram_url' => ['required', 'string'],
        ]);
        $id = 1;
        $socialsetting = SocialSetting::find($id);
        $socialsetting->facebook_url = request('facebook_url');
        $socialsetting->twitter_url = request('twitter_url');
        $socialsetting->instagram_url = request('instagram_url');
        $socialsetting->save();
        return redirect('/admin');
    }
}