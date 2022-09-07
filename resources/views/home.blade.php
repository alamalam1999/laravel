   @extends('layouts.main')
 

   @section('container')
    <div class="container px-4 py-5" id="custom-cards">
      <h1 class="pb-2 border-bottom">AVICENNA SCHOOL</h1>
  
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
         <a href="#" style="text-decoration: none">
               <div class="col">
               <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/CINERE.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover; ">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">CINERE </h2>
                  <ul class="d-flex list-unstyled mt-auto">
                     <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                     </li>
                     <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                        <small>Sekolah</small>
                     </li>
                     <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                        <small>SMA</small>
                     </li>
                  </ul>
                  </div>
               </div>
            </div>
         </a>
  
         <a href="#" style="text-decoration: none">
            <div class="col">
               <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/JAGAKARSA.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">JAGAKARSA</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                     <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                     </li>
                     <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                        <small>Sekolah</small>
                     </li>
                     <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                        <small>SD</small>
                     </li>
                  </ul>
                  </div>
               </div>
            </div>
         </a>

         <a href="#" style="text-decoration: none">
            <div class="col">
               <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/PAMULANG.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">PAMULANG</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                     <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                     </li>
                     <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                        <small>Sekolah</small>
                     </li>
                     <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                        <small>SMP</small>
                     </li>
                  </ul>
                  </div>
               </div>
            </div>
         </a>
      </div>
   </div>
   
   @endsection
