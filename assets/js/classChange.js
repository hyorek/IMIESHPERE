function changeVisu(elem, c1, c2)
{
    var i = 0;
    var verifclass = 0;
    var tmp = document.getElementsByClassName(c1);

    if (elem.className === c1) {
        verifclass = 1;
    }
    while (i < tmp.length)
        if (tmp[i++].className != c2) {
            tmp[i++].className = c2;
        }
    if (verifclass === 1)
        elem.className = c2;
    else
        elem.className = c1;
}
