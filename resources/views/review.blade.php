@extends('layouts.app')

@section('content')
<div class="container">
  <div class="review-container">
    <div class="review">
      <!-- A review page open for everyone to write their reviews on the service -->
      <h1><strong>Leave a Review</strong></h1>
      <h2><strong>Complete the form below</strong></h2>
      <p>We love to see the feedback you leave us so we can
        improve your experience shopping with us.<br> Please
        fill in and submit the form.</p>
      <form id="feedback" action="">
        <div class="pinfo">Your personal info</div>

        <div class="form-group">
          <div class="inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <br/><br/>
              <input name="name" placeholder="Name" class="form-control" type="text">
            </div>
          </div>
        </div>
        <br/>
        <div class="form-group">
          <div class="inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <br/><br/>
              <input name="email" type="email" class="form-control" placeholder="Enter email">
            </div>
          </div>
        </div>
        <br/>
        <div class="pinfo">Leave a review.</div>
        <div class="form-group">
          <div class="inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
              <br/><br/>
              <textarea class="form-control" id="review" rows="3"></textarea>
            </div>
          </div>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>


      </form>
    </div>
  </div>
</div>
@endsection