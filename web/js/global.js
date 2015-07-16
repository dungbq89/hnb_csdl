$(function() {
    $(".datepicker").datepicker();

    });
    
function trim(str) {
    str = str.replace(/^\s\s*/, '');
    var ws = /\s/,
    i = str.length;
    while (ws.test(str.charAt(--i)));
    return str.slice(0, i + 1);
}

function Tip(divId){
    document.getElementById(divId).style.display='block';
}
function UnTip(divId){
    document.getElementById(divId).style.display='none';
}

function showDiv(divId){
    document.getElementById(divId).style.display='block';
}
//---- ham kiem tra xem mot obj co la date ko
function isDateFormat(value) 
{ 
    var date=value.substr(0,10);                

    // Regular expression used to check if date is in correct format 
    var pattern = new RegExp(/^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{4}$/); 

    // kiem tra date
    if(date.match(pattern)){ 
        var date_array = date.split('/');            
        var day = date_array[0]; 

        // Attention! Javascript consider months in the range 0 - 11 
        var month = date_array[1] - 1; 
        var year = date_array[2]; 

        // This instruction will create a date object 
        var source_date = new Date(year,month,day);

        if(year != source_date.getFullYear()) 
        { 
            return false; 
        } 

        if(month != source_date.getMonth()) 
        { 
            return false; 
        } 

        if(day != source_date.getDate()) 
        { 
            return false; 
        } 
    }else {
        return false; 
    }

    // kiem tra time

    if(value.length>10){

        var time=value.substr(11);

        if(time.length ==8){

            var hour=time.substr(0,2);

            var minute=time.substr(3,2);

            var second=time.substr(6);
            if(parseInt(hour, 10) > 23 && parseInt(hour, 10) < 0){
                return false;
            }
            if(parseInt(minute, 10) > 60 && parseInt(minute, 10) < 0){
                return false;
            }
            if(parseInt(second, 10) > 60 && parseInt(second, 10) < 0){
                return false;
            }
        }else{
            return false;
        }

    }
    return true; 

}

/**
 * validate Date
 * khanhnq16
 */
function validateDate(obj,msg){

    var checkString = obj.value;

    checkString = trimAll(checkString);

    if (checkString != ""){
        var strMsg = (msg != null && msg != undefined) ? msg : 'Dữ liệu ngày tháng phải theo định dạng dd/mm/yyyy';
        if (!isDateFormat(checkString)){
            alert (strMsg);
            setTimeout(function(){
                obj.focus();
                obj.select();
            },0);
            return false;
        }
    }
    return true;
}
