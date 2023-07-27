    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    {{-- axios --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- toster --}}
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

{{-- Add this script before your existing IziToast scripts --}}
<script>
    iziToast.settings({
      position: 'topRight',
    });
  </script>

  @if(Session::has('success'))
  <script>
      iziToast.success({
          title: 'Success!',
          message: "{{ Session::get('success') }}",
      });
  </script>
  @elseif(Session::has('info'))
  <script>
    iziToast.info({
        title: 'Logout!',
        message: "{{ Session::get('info') }}",
    });
</script>
  @elseif(Session::has('error'))
  <script>
    iziToast.error({
        title: 'Deleted!',
        message: "{{ Session::get('error') }}",
    });
  </script>
  @elseif(Session::has('warning'))
  <script>
    iziToast.warning({
        title: 'Caution',
        message: "{{ Session::get('warning') }}",
    });
  </script>
  @endif
@stack('js')

