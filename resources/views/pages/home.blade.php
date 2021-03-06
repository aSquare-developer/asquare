@extends('master')

@section('title', config('app.name') . ' - ' . 'Home Page')

@section('content')

<!--  -->
<div class="simpleslide100">
  <div class="simpleslide100-item bg-img1" style="background-image: url('images/bg01.jpg');"></div>
  <div class="simpleslide100-item bg-img1" style="background-image: url('images/bg02.jpg');"></div>
  <div class="simpleslide100-item bg-img1" style="background-image: url('images/bg03.jpg');"></div>
</div>

<div class="size1 overlay1">
  <!--  -->
  <div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
    <h3 class="l1-txt1 txt-center p-b-25">
      Coming Soon
    </h3>

    <p class="m2-txt1 txt-center p-b-48">
      Our website is under construction!
    </p>

    <div class="flex-w flex-c-m cd100 p-b-33">
      <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
        <span class="l2-txt1 p-b-9 days">35</span>
        <span class="s2-txt1">Days</span>
      </div>

      <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
        <span class="l2-txt1 p-b-9 hours">17</span>
        <span class="s2-txt1">Hours</span>
      </div>

      <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
        <span class="l2-txt1 p-b-9 minutes">50</span>
        <span class="s2-txt1">Minutes</span>
      </div>

      <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
        <span class="l2-txt1 p-b-9 seconds">39</span>
        <span class="s2-txt1">Seconds</span>
      </div>
    </div>

  </div>
</div>
@endsection
