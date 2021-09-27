$(document).ready(function () {
	$("#datatable").DataTable();
	$(".datatable").DataTable();
	$(".datatableCustomized").DataTable({
		"bPaginate": false,
		"bFilter": false, //hide Search bar
		"bInfo": false, // hide showing entries
	});
	var a = $("#datatable-buttons").DataTable({
		// lengthChange: !1,
		// buttons: ["copy", "csv", "excel", "pdf"]

		lengthMenu: [
			[10, 50, 100, 500, -1],
			[10, 50, 100, 500, "All"],
		],
		buttons: ["copy", "excel", "pdf", "csv"],
	});
	$("#key-table").DataTable({ keys: !0 }),
		$("#responsive-datatable").DataTable(),
		$("#selection-datatable").DataTable({ select: { style: "multi" } }),
		a
			.buttons()
			.container()
			.appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
});
