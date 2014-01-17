    $(function () {
      $('#contactfrm').submit(function (e) {
        var thisForm = $(this);
        e.preventDefault();
        $("#success").fadeOut();


        //Muestra loading
        $("#loading").fadeIn(function () {
          //En teoría pasa por POST las cosas a un script xD
          $.ajax({
            type: 'POST',
            url: thisForm.attr("action"),
            data: thisForm.serialize(),
            //Espera a ver si va, y pone success
            success: function (data) {

              $("#loading").fadeOut(function () {
                $("#success").text(data).fadeIn();
              });

            }
          });
        });
      })
    });




  $(document).ready(function () {
    $(window).on("load scroll resize", function () {
      $('.hero-top-badge,.fade-element').scrollzip({
        showFunction: function () {
          $(this).css("visibility", "visible").addClass('animated fadeIn');
        },
        hideFunction: function () {
          $(this).css("visibility", "hidden").removeClass('animated');
        },
        showShift: 150,
        hideShift: 50,
      });
    });
    $('.fix-1,.fix-2,.fix-3,.fix-4,.map').parallax({
      speed: 0.15
    });


    $('.toggle').click(function () {
      var $toggled = $(this).data('id');
      $($toggled).siblings(':visible').css("z-index", "9997").slideUp('fast');
      $($toggled).css("z-index", "9998").slideDown('slow');
      return false;
    });
  });




  
