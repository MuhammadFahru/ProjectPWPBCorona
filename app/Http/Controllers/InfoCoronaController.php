<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoCoronaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'DataGlobal', 'DataIndonesia');
    }

    public function index() {

        // GET Data API Corona Virus
        $data1 = Http::get('https://api.kawalcorona.com/positif');
        $data2 = Http::get('https://api.kawalcorona.com/sembuh');
        $data3 = Http::get('https://api.kawalcorona.com/meninggal');        
        $data4 = Http::get('https://api.kawalcorona.com/indonesia');    
        
        // Convert Data to JSON
        $data['positif'] = $data1->json();
        $data['sembuh'] = $data2->json();
        $data['meninggal'] = $data3->json();
        $data['indonesia'] = $data4->json();

        return view('welcome', $data);

    }

    public function DataGlobal() {

        // GET Data API Corona Virus
        $data1 = Http::get('https://api.kawalcorona.com/');
        $data2 = Http::get('https://api.kawalcorona.com/positif');
        $data3 = Http::get('https://api.kawalcorona.com/sembuh');
        $data4 = Http::get('https://api.kawalcorona.com/meninggal');

        // Convert Data to JSON
        $data['global'] = $data1->json();
        $data['positif'] = $data2->json();
        $data['sembuh'] = $data3->json();
        $data['meninggal'] = $data4->json();        
        
        return view('global', $data);

    }

    public function DataIndonesia() {

        // GET Data API Corona Virus
        $data1 = Http::get('https://api.kawalcorona.com/indonesia');
        $data2 = Http::get('https://api.kawalcorona.com/indonesia/provinsi');    

        // Convert Data to JSON
        $data['indonesia'] = $data1->json();
        $data['provinsi'] = $data2->json();

        return view('indonesia', $data);

    }

    public function DataDashboard() {
        
        // GET Data API Corona Virus
        $data1 = Http::get('https://api.kawalcorona.com/positif');        
        $data2 = Http::get('https://api.kawalcorona.com/indonesia');    
        
        // Convert Data to JSON
        $data['positif'] = $data1->json();
        $data['indonesia'] = $data2->json();

        return view('dashboard.index', $data);

    }

    public function DataGlobalDashboard() {

        // GET Data API Corona Virus
        $data1 = Http::get('https://api.kawalcorona.com/');
        $data2 = Http::get('https://api.kawalcorona.com/positif');
        $data3 = Http::get('https://api.kawalcorona.com/sembuh');
        $data4 = Http::get('https://api.kawalcorona.com/meninggal');

        // Convert Data to JSON
        $data['global'] = $data1->json();
        $data['positif'] = $data2->json();
        $data['sembuh'] = $data3->json();
        $data['meninggal'] = $data4->json();        
        
        return view('dashboard.data-global', $data);

    }

    public function DataIndonesiaDashboard() {

        // GET Data API Corona Virus
        $data1 = Http::get('https://api.kawalcorona.com/indonesia');
        $data2 = Http::get('https://api.kawalcorona.com/indonesia/provinsi');    

        // Convert Data to JSON
        $data['indonesia'] = $data1->json();
        $data['provinsi'] = $data2->json();

        return view('dashboard.data-indonesia', $data);

    }

}
