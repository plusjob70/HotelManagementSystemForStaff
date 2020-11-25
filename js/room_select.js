// 선택한 수만큼 객실이 선택되었는지 확인

var NOR = parseInt(document.getElementById("NOR").innerHTML); 

jQuery(document).ready(function($) {
    $("input[id=room]:checkbox").change(function() {
        if($("input[id=room]:checkbox:checked").length == NOR) {
            $(":checkbox:not(:checked)").attr("disabled", "disabled");
        } else {
            $("input[id=room]:checkbox").removeAttr("disabled");
        }
    });
});

function checkNumberOfRooms() {
    if ($("input[id=room]:checkbox:checked").length != NOR) {
        alert("Please select " + NOR + " rooms!");
        return false;
    }
    return true;
}