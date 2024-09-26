<!doctype html>
<html lang="en">

    <!-- head section -->

@include('backend.layout.head')
  

<body class="horizontal  light  ">
  <div class="wrapper">

    <!-- head section -->
    @include('backend.layout.navbar')
    
    <!-- head section -->
    {{-- @include('backend.layout.sidebar') --}}

        <!-- main -->
    <main role="main" class="main-content">
      @yield('content')
    </main> 
  </div> <!-- .wrapper -->

  <!-- .script -->
  @include('backend.layout.script')

</body>

</html>