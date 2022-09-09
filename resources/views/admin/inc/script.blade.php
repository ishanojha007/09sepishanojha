<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="{{asset('assets/admin/js/core/popper.min.js')}}"></script>
   <script src="{{asset('assets/admin/js/core/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/admin/js/plugins/perfect-scrollbar.min')}}.js"></script>
   <script src="{{asset('assets/admin/js/plugins/smooth-scrollbar.min')}}.js"></script>
   <!-- Kanban scripts -->
   <script src="{{asset('assets/admin/js/plugins/dragula/dragula.min')}}.js"></script>
   <script src="{{asset('assets/admin/js/plugins/jkanban/jkanban.js')}}"></script>
   <script src="{{asset('assets/admin/js/plugins/chartjs.min.js')}}"></script>
   <script src="{{asset('assets/admin/js/plugins/threejs.js')}}"></script>
   <script src="{{asset('assets/admin/js/plugins/orbit-controls.js')}}"></script>
   <script src="{{asset('assets/admin/js/plugins/datatables.js')}}"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
   <script>
      $(document).ready(function() {

  $('.lodar-modal1').css('display', 'none');

         $('.js-example-basic-single').select2();
      });
      if (document.querySelector('.datepicker')) {
         flatpickr('.datepicker', {
            mode: "range"
         });
      }

      let digitValidate = function(ele) {
         // console.log(ele.value);
         ele.value = ele.value.replace(/[^0-9]/g, '');
      }

      $('#password, #password_confirmation').on('keyup', function() {
         if ($('#password').val() == $('#password_confirmation').val()) {
            $('#passwordMatchmessage').html('');
         } else
            $('#passwordMatchmessage').html('Confirm password does not match with password.').css('color', 'red');
      });
   </script>
   <script type="text/javascript">
      // const dataTableBasic = new simpleDatatables.DataTable(".dataTable-pagination-list", {
      //   searchable: true,
      //   fixedHeight: true,
      //   paging: true
      // });
   </script>

   <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
         var options = {
            damping: '0.5'
         }
         Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
   </script>
   <!-- Github buttons -->
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
   <script src="{{asset('assets/admin/js/soft-ui-dashboard.min.js?v=1.0.5')}}"></script>