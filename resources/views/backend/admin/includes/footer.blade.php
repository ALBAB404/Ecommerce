    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

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
                title: 'Updated!',
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
                title: 'Warning',
                message: "{{ Session::get('warning') }}",
            });
          </script>
          @endif
