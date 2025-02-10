
    $(document).ready(function() {
      $(".text_ano").keyup(function() {
          $(".text_ano").val(this.value.match(/[0-9]*/));
      });
    });
  
    $(document).ready(function() {
      $(".text_dia").keyup(function() {
          $(".text_dia").val(this.value.match(/[0-9]*/));
      });
    });
    