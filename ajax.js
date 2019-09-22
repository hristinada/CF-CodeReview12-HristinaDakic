
  //Ajax request to ajax_check.php for checking username
    $(".username").keyup(function() {
        var value = $(this).val();

      if(value.length > 0){
        console.log(value);
        
        request = $.ajax({
           url: "/CF-CodeReview12-HristinaDakic/ajax_check.php",
           type: "POST",
           data: {username:value},
           success: function(data){
                    if (data == "Username is taken"){
                        $(".display-username-taken").html(data);
                    } else {
                      $(".display-username-taken").html(data);
                    }
                }
        });

      } else {
        $(".display-username-taken").html("");
      }
    }).keyup();

  //Ajax request to ajax_check.php for checking email
    $(".email").keyup(function() {
        var value = $(this).val();

      if(value.length > 0){
        console.log(value);
        
        request = $.ajax({
           url: "/CF-CodeReview12-HristinaDakic/ajax_check.php",
           type: "POST",
           data: {email:value},
           success: function(data){
                    if (data == "E-mail is taken"){
                        $(".display-email-taken").html(data);
                    } else {
                      $(".display-email-taken").html(data);
                    }
                }
        });

      } else {
        $(".display-email-taken").html("");
      }

    }).keyup();
