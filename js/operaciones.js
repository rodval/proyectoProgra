function getCheckValues(){
    var a = document.querySelectorAll("[stage=cat]");
    var b = document.querySelectorAll("[stage=mar]");
    var c = [...a,...b];
    var d = document.querySelectorAll(".product");
    var num1 = 0;
    
    d.forEach(function (e){
        var n1 = e.getAttribute('cat');
        var n2 = e.getAttribute('mar');
        var num2 = 0;
    
        c.forEach(function (r){
            if(r.checked && (n1 == r.id || n2 == r.id)){
                num2++;
            }  
        });
        
        if(num2 == 0){
            e.hidden = true;
        } else {
            e.hidden = false;
            num1++;
        }
    });
    
    if(num1 == 0){
        d.forEach(function (e){
            e.hidden = false;
        });
    }   
}