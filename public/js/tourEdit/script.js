
//// Khai bao trong admin/tour/edit.blade.php

var lang = document.getElementById("lang").value;
if(lang == 'en'){
    var title = 'Day';
}
else{
    var title = 'Ngày';
}
$(function(){

    //so ngay lich trinh
    var max_day = $("#day_number").val();
    var count1 = max_day;
    $("#addDayEdit").on('click',function(){
        
        
        count1++;
        var table = "<div id='"+count1+"'>"+
        "<label for='title'>"+"</label>"+
        "<input placeholder='"+title+" "+count1+"' class='form-control'  type='text' name='subTripTitle["+count1+"]'/>"
        +"<label for='content'></label><textarea style='display:none' id='subTripContent' class='form-control ckeditor' name='subTripContent["+count1+"]' rows='10' cols='50'></textarea>"
        +"</div>";
        $("#day").append(table);
    });
    $("#removeDayEdit").on('click',function(){
        var x = '#' + String(count1);
        $(x).remove();
        count1--;
        
    });

    // print subtrips

    
     
  });
  
