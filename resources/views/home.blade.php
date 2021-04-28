@extends('index')

@section('title', 'Halaman Home')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
<style>
    #profile
    {
        background-image : url(img/profil.jpg);
        background-size  : cover;
        height : 75%;
        /* background-image : center; */
        
    }
</style>

@section('content')
    <div class="container">
        <section class="my-3" id="profile">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="rounded-circle img-thumbnail mt-2" width="45%" src="img/profil_bimbim.jpg">
                    <h3>Bimbim Mulya Krismon</h3>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section>
            <div class="row">
                <div class="col-md">
                    <h4>Pendidikan</h4>
                </div>
                <div class="col-md">
                    <h4>Kursus</h4>
                </div>
                <div class="col-md">
                    <h4>Kontak</h4>
                </div>
            </div>

        <div class="row">
            <div class="col-md bg-light text-center">
                <ol>
                <li>SD Negeri Pelawe </li>
                <li>SMP Negeri 2 Lubuklinggau</li>
                    <li>SMA Yadika Lubuklinggau</li>
                    <li>STMIK Nusa Mandiri Jakarta</li>
                </ol>
                </div>

            <div class="col-md bg-secondary text-justify text-white">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                   <li> Amet quaerat illo, deserunt dicta provident natus fugit veritatis vero quasi dolor libero, </li>>
                    facere consequuntur ducimus odio incidunt autem excepturi pariatur quod.</p>
            </div>

            <div class="col-md col-md bg-light text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nam rerum debitis iusto exercitationem vero temporibus, 
                    culpa accusamus sequi, quibusdam quod voluptate odit, dicta sapiente hic nostrum dolorum nisi error eum?</p>
            </div>
        </div>
        </section>
    </div>
@endsection