
  @include('backend.layout.header')
  <!-- Left side column. contains the logo and sidebar -->
  
  @include('backend.layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header content-title">
      <h1 id="title">@yield('title')</h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="box">
          {{-- <div class="box-header with-border">

          </div> --}}
          <div class="box-body">
            @yield('content')
          </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Main Footer -->

  @include('backend.layout.footer')

