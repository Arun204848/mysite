/*-----------------------------------
    Calendar UI
    -----------------------------------*/
    $(document).ready(function(){  
        $('.phone_us').inputmask('9999999999');
        jQuery('#hawanBookingFrm').parsley();
        $('select').select2({
          allowClear: true
        });
        // window.Parsley.on('form:validated', function(){
        //   $('select').on('select2:select', function(evt) {
        //       $("#city_id").parsley();
        //   });
        // });
    });  

    function getSlots(){
      var selectedDate = $('input[name="selectedDate"]').val();
      var hawanTypeID = $('input[name="hawanType"]:checked').data('id');
      var kundID = $('#kund').val();
      if(selectedDate != '' && kundID != ''){
        $.get(url+"/slotbydatelive/"+hawanTypeID+'/'+selectedDate+'/'+kundID, function(data, status){
          if(status == 'success'){
            $('.sigma_select-slots').html(data.slots);
          }
        });
      }
    }

    // var unavailableDates = ["22-9-2025","23-9-2025","24-9-2025","25-9-2025","26-9-2025","27-9-2025","28-9-2025","29-9-2025","30-9-2025","1-10-2025"];
    var unavailableDates = ["3-3-2026"];

    function unavailable(date) {
        dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
        if ($.inArray(dmy, unavailableDates) == -1) {
            return [true, ""];
        } else {
            return [false, "", "Unavailable"];
        }
    }

    var dateForma = "dd-mm-yy";
    $("#hawanpicker").datepicker( {
      firstDay: 0,
      dateFormat: "yy-mm-dd",
      // changeMonth: true,
      // changeYear: true,
      dateFormat:dateForma,
      beforeShowDay: unavailable,
      // defaultDate: "+1d",
      // changeMonth: true,
      minDate: 0,
      maxDate: 1,
      numberOfMonths: 1,
      // prevText: '<i class="fas fa-chevron-left"></i>',
      // nextText: '<i class="fas fa-chevron-right"></i>',
      navigationAsDateFormat: true,
      prevText: "&#x3C;M",
      nextText: "M&#x3E;",
      currentText: "Hoy",
      showMonthAfterYear: false,
      onSelect: function(date, inst){
        var selectedDate = $(this).val();
        // console.log('selectedDate = ',$.datepicker.formatDate('MM dd, yy', new Date(selectedDate)));
        $('input[name="selectedDate"]').val(selectedDate);
        $('input[name="bookingdate"]').val(selectedDate);
        $('#monthAndDate').text($.datepicker.formatDate('MM dd, yy', $("#hawanpicker").datepicker('getDate')));
        $('input[name="bookingtime"]').val('');
        $('input[name="slot"]').val('');
        $('#pandit').html('<option value="">Select a Pandit</option>');
        getSlots();
      }
    });
    

    //getting today's date
    // var currentDate = new Date();
    // currentDate.setDate(currentDate.getDate() + 1);
    // currentDate = $.datepicker.formatDate('MM dd, yy', currentDate);
    // $('#monthAndDate').text(currentDate);
    $('#kund').change(function(){
      getSlots();
      $('input[name="bookingtime"]').val('');
      $('input[name="slot"]').val('');
      $('#pandit').html('<option value="">Select a Pandit</option>');
    });

    $('input[name="hawanType"]').click(function(){
        getSlots();
        if( $(this).is(":checked") ){ // check if the radio is checked
            var hawanType = $(this).val(); // retrieve the value
            var hawanTypeID = $(this).data('id'); // retrieve the value
            $('input[name="bookingtime"]').val('');
            $('input[name="slot"]').val('');
            $('#pandit').html('<option value="">Select a Pandit</option>');
            
        }
    });

    $(document).on("click",".sigma_select-slots li",function() {
      $('.sigma_select-slots li').removeClass('active');
      $(this).addClass('active');
      $('input[name="selectedTime"]').val($(this).data('time'));
      $('input[name="bookingtime"]').val($(this).data('time'));
      $('input[name="slot"]').val($(this).data('tid'));
      getPandits();
    });

    function getPandits(){
      
        var selectedDate = $('input[name="selectedDate"]').val();
        var hawanTypeID = $('input[name="hawanType"]:checked').data('id');
        var kundID = $('#kund').val();
        var slotID = $('input[name="slot"]').val();
        if(selectedDate != '' && kundID != '' && slotID != ''){
          $.get(url+"/panditavailbility/"+hawanTypeID+'/'+selectedDate+'/'+kundID+'/'+slotID, function(data, status){
            if(status == 'success'){
              $('#pandit').html(data.pandits);
            }
          });
        }
      
    }

    function getStates(){
      var countryID = $('#country').find("option:selected").data('id');
      $.get(url+"/statebycountryid/"+countryID, function(data, status){
        if(status == 'success'){
          $('#state').html(data.states);
        }
      });
    }
    $('#country').change(function(){
      getStates();
    });
    // getStates();
    $('#state').change(function(){
      var stateID = $(this).find("option:selected").data('id');
      $.get(url+"/citybystateid/"+stateID, function(data, status){
        if(status == 'success'){
          $('#city').html(data.cities);
          // $('#city').select2({
          //   allowClear: true,
          //   placeholder: 'Select a City',
          // });
        }
      });
    });


   
        // Ensure search field is active when dropdown opens
    $(document).on('select2:open', function () {
        setTimeout(() => {
            let searchField = document.querySelector('.select2-container--open .select2-search__field');
            if (searchField) {
                searchField.focus();
            }
        }, 100); // Small delay to ensure Select2 is fully rendered
    });
