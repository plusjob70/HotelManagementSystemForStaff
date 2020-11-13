function onClickHandler() {
    var sels = document.getElementsByName('selected_staff')
    for(var i=0; i<sels.length; i++){
        sels[i].value = document.getElementById('staff_list').value
    }
}

window.onload = function () {
    document.getElementById('staff_list').onclick = () => onClickHandler();
    onClickHandler()
}

