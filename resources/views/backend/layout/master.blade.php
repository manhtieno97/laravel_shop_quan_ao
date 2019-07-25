
  @include('backend.layout.header')
  <!-- Left side column. contains the logo and sidebar -->
  
  @include('backend.layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Main Footer -->

  @include('backend.layout.footer')

