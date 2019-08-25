@extends('backend.layouts.app')

@section('title')
Laptop Shop | Error 403
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
          <div class="error-page">
            <h2 class="headline text-warning"> 403</h2>

            <div class="error-content">
              <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not Access.</h3>

              <p>
                You not access this page
                 , you may <a href="{{route('admin.dashboard')}}">return to dashboard</a>
              </p>

              {{-- <form class="search-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
                <!-- /.input-group -->
              </form> --}}
            </div>
            <!-- /.error-content -->
          </div>
          <!-- /.error-page -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection
