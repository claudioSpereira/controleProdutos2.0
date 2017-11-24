@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <painel titulo="Control Panel">

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" style="text-decoration: none;" >
                      <i class="fa fa-product-hunt fa-5x"></i>
                      <h4>Products</h4>
                  </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" style="text-decoration: none;" >
                      <i class="fa fa-print fa-5x"></i>
                      <h4>Print Control</h4>
                  </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" style="text-decoration: none;" >
                      <i class="fa fa-calendar-o fa-5x"></i>
                      <h4>Calendar Control</h4>
                  </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" style="text-decoration: none;" >
                      <i class="fa fa-institution fa-5x"></i>
                      <h4>Institution</h4>
                  </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" style="text-decoration: none;" >
                      <i class="fa fa-user-o fa-5x"></i>
                      <h4>Author</h4>
                  </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" style="text-decoration: none;" >
                      <i class="fa fa-user-plus fa-5x"></i>
                      <h5>ADD COLLABORATOR</h5>
                  </a>
              </div>
            </div>

            </painel>
        </div>
    </div>
</div>
@endsection
