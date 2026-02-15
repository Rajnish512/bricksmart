$(function(){
$('[data-filter="trigger"]').on("change", function() {
    var t = $(this).find("option:selected").val().toLowerCase();

	$('[data-filter="target"]').css("display", "none"); 
	$("#" + t).css("display", "table-row-group"); 
	if(t == "all") {
		$('[data-filter="target"]').css("display", "table-row-group")
	}
	$(this).css("display", "block"); 
});
})