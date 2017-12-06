@extends('pages.master')

@section('scripts')
  <script src="{{ url('/js/dashboard.js')}}"></script>
@stop

@section('title')
  new new | dashboard
@stop

@section('content')
  <div class="text-center mb-4">
    <h3>Developer Dashboard</h3>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="card-column mb-4">
        <div class="card">
          <form action="" class="card-body">
            <div class="text-center mb-3">
              <h5>Sign Up New Devs</h5>
            </div>
            <div class="form-group">
              <input id="email" type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input id="password" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <input id="confirmPassword" type="password" class="form-control" placeholder="Confirm Password">
            </div>
            <button id="signupButton" type="submit" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
      </div>
      <div class="card-column mb-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center-mb-3">
              <h5>Inbox</h5>
              <ul>
                <li id="inboxList"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <div class="card-body">
          <div class="text-center-mb-3">
            <h5>Artist List</h5>
            <ul>
              <li id="artistList"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop