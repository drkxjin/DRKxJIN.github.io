
function multiplicationTable() {
    var table;
    table='<table>';

    var num=document.getElementById("number").value;
    if(num==null || num==""){
     document.getElementById('invalid-result').innerHTML="Please Enter Number"
     document.getElementById('invalid-result').style.color='red'
     return false;
    }else if(num==num){
        document.getElementById('new-num').innerHTML='Enter New Number'
        document.getElementById('new-num').style.color='green'
        document.getElementById('invalid-result').style.color='transparent'
        for(i=1;i<=10;i++){
          table+='<tr><td>'+ num + '  x  '+ i +' = ' +num*i+ '</td></tr>';
       }
    }

    table+='</table>';
    document.getElementById("result").innerHTML = table;
    }