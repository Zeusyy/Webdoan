var count = 0;



$(function(){
    $("#addDay").on('click',function(){
        var lang = document.getElementById("lang").value;
        if(lang == 'en'){
            var title = 'Day';
        }
        else{
            var title = 'Ngày';
        }
        count++;
        var table = "<div id='"+count+"'>"+
        "<label for='title'>"+"</label>"+
        "<input placeholder='"+title+" "+count+"' class='form-control' type='text' name='subTripTitle["+count+"]'/>"
        
        +"<label for='content'></label><textarea style='display:none' class='form-control' name='subTripContent["+count+"]' rows='10' cols='50'></textarea>"
        +"</div>";

        $("#day").append(table);
        console.log(document.getElementById("lang").value);
        
        
    });
    $("#removeDay").on('click',function(){
        var x = '#' + String(count);
        $(x).remove();
        count--;
    });
    var max_day = $("#day_number").val();
    
  });

  //show Image name on input after chose from device
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  //show image before save
  $(document).ready(function(){
    // Prepare the preview for profile picture
        $("#customFile").change(function(){
            readURL(this);
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#avatar').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }