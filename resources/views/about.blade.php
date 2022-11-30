@extends('layouts.app')

<head>
<title>About us page </title>
<style>
    .background {
        background-color:#ECE4D0;
    }

.section {
  background-color: #DBCFB8;
  color: #522121;
  border: 1px solid black;
    border-radius: 6px;
  margin: 20px;
  padding: 20px;
}

.myHeader {
    margin: 0;
    background-image: url("{{asset('jpg/abouts.jpg')}}");
    background-size: 100% 100%;
    background-color: grey;
 
    width: 100%;
    height: 100%;
}

.myHeader h1 {
    text-align: center;
    padding: 15% 25% 0%;
    color: #522121;
    font-size: 450%;
}

</style>
</head>
@section('content')
<div class="background">
    <div class="myHeader">
        <h1><strong>About Us</strong></h1>
    </div>
    <!-- Provides information regarding company's objective and motivation -->
    <div class="section">
        <h2><strong>Our story</strong></h2>
    <p> Our brand is called TresorLdn.
        Tresor stands for treasure, we believed this is fitting as the furniture
        you purchase from us will be treasured by yourselves for a very long time
        and we are based in London. Shop TresorLdn from the comfort of your own home.
         You can browse and shop many products on our website, and have them delivered
         straight to your door.
    </p>

    </div>
     <div class="section">
    <h2><strong>Sustainability</strong></h2>

    <p2> We wish to encourage our customers to live more sustainably, so we're
         concentrating on affordable, resource and energy efficient products.
         With these little changes and energy-saving solutions we are paving
         the way for more sustainable homes. We are continuing our journey
         towards only sourcing renewable or recycled materials by 2030.
         We aim to use only renewable or recycled materials and to provide
         new solutions for our customers to prolong the life of products and materials.
    </p2>
    </div>

    <div class= "section">
    <h2> Contributor's </h2>
    <p> We had the idea during a team project in University where we were told to create
            a website selling products. Shortly after, we decided to bring the idea to life.
            The Contributors's for the developing the online ordering system are:
            <li>Humera Muhammad</li>
            <li>Ibrahim Ahmad</li>
            <li>Ben Squelch</li>
            <li>Thomas Merricks</li>
            <li> Anaami Patel</li>
            <li>Zainab Desai</li>
            <li>Sachin Kumar</li>
            <li>Boluwatife Akinola</li>
    </div>
    </div>
@endsection
