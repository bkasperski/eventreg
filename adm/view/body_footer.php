<? function footer() { ?>
</div> 
    <script src="files/lib/bower_components/jquery/dist/jquery.min.js"></script>  
    <script src="files/lib/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="files/lib/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="files/lib/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="files/lib/bower_components/datatables/media/js/dataTables.tableTools.js"></script>
    <script src="files/lib/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script src="files/lib/bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
	<script src="files/lib/bower_components/moment/min/moment-with-locales.min.js"></script>
	<script src="files/lib/bower_components/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="files/lib/dist/js/sb-admin-2.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-raport').DataTable({					                  
				  language: {
					"url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/Polish.json"
							}			 	          
										} );
								} );

		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
									});
			$("[data-toggle=popover]")
				.popover()

		$(function () {
			$('#datetimepicker').datetimepicker({
				locale: 'pl',
				viewMode: 'days',
                format: 'DD.MM.YYYY'
												});
						});

		$(function () {
			$('#datetimepicker2').datetimepicker({
				locale: 'pl',
				viewMode: 'days',
                format: 'DD.MM.YYYY'
												});
						});

  $(function() {
    $('#toggle-one').change(function() {
      $(this).prop('checked')
    })
  })

	$('.btn').button();

	$(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.fill tr').css('display', 'none');
        $('.fill tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.fill tr').css('display', 'none').fadeIn('slow');
      }
    });

 });

	$(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.fill2 tr').css('display', 'none');
        $('.fill2 tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.fill2 tr').css('display', 'none').fadeIn('slow');
      }
    });

 });

 /* przyciski powiadomiej przy potwierdzeniu */
 
$(function () {
    $('.button-checkbox').each(function () {

        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            $button.data('state', (isChecked) ? "on" : "off");

            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        function init() {

            updateDisplay();

            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>
</body>
</html>
<? } ?>