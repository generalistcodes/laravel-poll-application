{{ HTML::script('assets/js/libs/jquery-1.10.2.min.js') }}
{{ HTML::script('plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/libs/lodash.compat.min.js') }}
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
{{ HTML::script('assets/js/libs/html5shiv.js') }}
    <![endif]-->
{{ HTML::script('plugins/touchpunch/jquery.ui.touch-punch.min.js') }}
{{ HTML::script('plugins/event.swipe/jquery.event.move.js') }}
{{ HTML::script('plugins/event.swipe/jquery.event.swipe.js') }}
{{ HTML::script('assets/js/libs/breakpoints.js') }}
{{ HTML::script('plugins/respond/respond.min.js') }}
{{ HTML::script('plugins/cookie/jquery.cookie.min.js') }}
{{ HTML::script('plugins/slimscroll/jquery.slimscroll.min.js') }}
{{ HTML::script('plugins/slimscroll/jquery.slimscroll.horizontal.min.js') }}
{{ HTML::script('plugins/flot/excanvas.min.js') }}
{{ HTML::script('plugins/sparkline/jquery.sparkline.min.js') }}
{{ HTML::script('plugins/flot/jquery.flot.min.js') }}
{{ HTML::script('plugins/flot/jquery.flot.tooltip.min.js') }}
{{ HTML::script('plugins/flot/jquery.flot.resize.min.js') }}
{{ HTML::script('plugins/flot/jquery.flot.time.min.js') }}
{{ HTML::script('plugins/flot/jquery.flot.growraf.min.js') }}
{{ HTML::script('plugins/easy-pie-chart/jquery.easy-pie-chart.min.js') }}
{{ HTML::script('plugins/daterangepicker/moment.min.js') }}
{{ HTML::script('plugins/daterangepicker/daterangepicker.js') }}
{{ HTML::script('plugins/blockui/jquery.blockUI.min.js') }}
{{ HTML::script('plugins/fullcalendar/fullcalendar.min.js') }}
{{ HTML::script('plugins/noty/jquery.noty.js') }}
{{ HTML::script('plugins/noty/layouts/top.js') }}
{{ HTML::script('plugins/noty/themes/default.js') }}
{{ HTML::script('plugins/uniform/jquery.uniform.min.js') }}
{{ HTML::script('plugins/select2/select2.min.js') }}
{{ HTML::script('plugins/datatables/jquery.dataTables.min.js') }}
{{ HTML::script('plugins/datatables/tabletools/TableTools.min.js') }}
{{ HTML::script('plugins/datatables/colvis/ColVis.min.js') }}
{{ HTML::script('plugins/datatables/DT_bootstrap.js') }}
{{ HTML::script('plugins/datatables/responsive/datatables.responsive.js') }}
{{ HTML::script('assets/js/app.js') }}
{{ HTML::script('assets/js/plugins.js') }}
{{ HTML::script('assets/js/plugins.form-components.js') }}

<script type="text/javascript">
     $(document).ready(function() {
                 "use strict";

                 App.init(); // Init layout and core plugins
                 Plugins.init(); // Init all plugins
                 FormComponents.init(); // Init all form-specific plugins
             });
</script>

{{ HTML::script('assets/js/custom.js') }}
{{ HTML::script('assets/js/login.js') }}