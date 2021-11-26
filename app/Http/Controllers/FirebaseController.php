<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     //  $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/key/Firebase.json');
        $firebase=(new Factory)->withServiceAccount(__DIR__.'/key/Firebase.json');

        //$database = $firebase->getDatabase();
        $database = $firebase->createDatabase();

        $newPost = $database->getReference('/usuario/');
        
        echo "<pre>";
        print_r($newPost->getvalue());
       /* $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/Firebase.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount);

        $database = $firebase->createDatabase();

        $newPost = $database
        ->getReference('coosedsarlstream')
        ->push([
        'title' => 'Testing data to add' ,
        'category' => 'from Laravel'
        ]);
        echo "<h3> Data inserted</h3>";*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
    }
}
