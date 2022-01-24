<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Form;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('pages.home');
    }
    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
    public function about(){
        return view('pages.about');
    }
    public function gallery(){
        return view('pages.galeri');
    }
    public function service(){
        return view('pages.service');
    }
    public function booking(){
        return view('modal.booking');
    }
    public function bridal(){
        return view('pages.service.bridal');
    }
    public function commercial(){
        return view('pages.service.commercial');
    }
    public function party(){
        return view('pages.service.party');
    }
    public function theatrical(){
        return view('pages.service.theatrical');
    }
    public function television(){
        return view('pages.service.television');
    }
    public function movie(){
        return view('pages.service.movie');
    }
    public function success(){
        return view('pages.success');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/photo', 'public');

        Form::create($data);

        return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Form::findorFail($id);
        $item->delete();

        return redirect()->route('dashboard');
    }
}
