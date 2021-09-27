function validateData(conditions, callback) {
	status = true;

	for (let i = 0; i < conditions.length; i++) {
		const e = conditions[i];
		const id = e.id;
		const rules = e.rules;
		msg = "";
		$("#" + id).css("border", "1px solid #ced4da");
		$("#" + id + "-error").hide();
		var data = $("#" + id).val();
		if ("required" in rules) {
			if (rules.required == true && data.length < 1) {
				msg = "This value is required.";
				status = false;
				$("#" + id).css("border", "1px solid red");
				$("#" + id + "-msg").text(msg);
				$("#" + id + "-error").show();
			}
		}
		if ("type" in rules) {
			if (rules.type == "number" && isNaN(data)) {
				msg = "This value must be a number";
				status = false;
				$("#" + id).css("border", "1px solid red");
				$("#" + id + "-msg").text(msg);
				$("#" + id + "-error").show();
			}
		}
	}

	callback(status);
}
