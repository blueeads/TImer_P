var timer;
var start = 0;
var b = true;

function createTimer() {
    b = true;

    if (timer) {
        clearInterval(timer);
        timer = null;
    }

    timer = setInterval(function() {
        SetTimer();
    }, 1000);
}

function SetTimer() {
    if(b) {    
        start++;
        console.log(start);
    }
}

function EndTimer() {
    b = false;
}

function ResetTimer() {
    start = 0;
}