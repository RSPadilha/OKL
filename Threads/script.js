var i = 0;
timedCount();
function timedCount() {
    i++;
    postMessage(i);
    setTimeout("timedCount()",500);
}
