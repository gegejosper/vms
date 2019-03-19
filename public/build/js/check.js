$(document).ready(function() {
    $('#checkAll').click(function () {    
        $(':checkbox.checkItem').prop('checked', this.checked);    
        console.log("dsadas");
    });
});
  