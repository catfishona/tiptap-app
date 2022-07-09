@extends('layouts.app')

@section('content')

 <!-- ========= Header ========= -->
 <header class="masthead">
     <div class="container">
         <div class="masthead-subheading">about tiptap.</div>
         <div class="masthead-heading">
             <p>get to know </p>
             </p>our vision, mission, & team.</p>
         </div>
         
     </div>
 </header>
 <!-- ========= End Header ========= -->

 <!-- ========= Start Vision ========= -->
 <section class="section-bg";>
     <div class="container">

        <div class="row", style="justify-content: start">
             <div class="col-md-4">
                 <h2 class=""><strong>Vision</strong></h2>
                 <br>
                 <p> Our vision is to continuously invest and develop our range of consultancy services and products so that we can create value and real wealth for all our clients and their stakeholders. In doing so, we will continue to be the partner of choice and market leader in value creation for the self-storage industry                 <!-- img -->
</p>
             </div>
           
         </div>
     </div>
 </section>
  <!-- ========= End Vision ========= -->

 <!-- ========= Start Mission ========= -->
 <section class="section-bg" style="background-color:#fbe192";>
     <div class="container">
         <div class="row", style="justify-content: end">       
         <div class="col-md-4">
                 <h2 class="" style="text-align:right"><strong>Mission</strong></h2>
                 <br>
                 <p style="text-align:right;">We provide exceptional customer service, great prices, security, and convenience. We have the perfect storage unit available for you. Start storing with us today!                  <!-- img -->
</p>
             </div>
           
         </div>
     </div>
 </section>
  <!-- ========= End Mission ========= -->


 <!-- ======= Our Team ======= -->
 <section class="book-section">
     <div class="container">
         <div class="text-center">
             <div class="section-title">
                 <h2>Our Team</h3>
             </div>
         </div>
         
         <div class="row text-center", style="justify-content: center">
             <div class="col-md-4">
                 <img src="{{ url('img/leona.jpg') }}" style="border-radius:70%; width:150px; height:auto;"/>
                 <h4 class="my-3">Leona Rose</h4>
                 <p class="text-muted">1972034</p>
             </div>
             <div class="col-md-4">
             <img src="{{ url('img/exel.jpg') }}" style="width:150px; border-radius:70%; height:150px;"/>
                 <h4 class="my-3">Exelonia Maretta</h4>
                 <p class="text-muted">1972023</p>
             </div>
           
         </div>
     </div>
 </section>
 <!-- ======= End Our Team Section ======= -->
 @endsection