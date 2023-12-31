
function changePage(page) {
	$("input[name=filter_page]").val(page);
	$("#adminForm").submit();
}

function showPriceRange() {
	const VND = new Intl.NumberFormat("vi-VN", {
		style: "currency",
		currency: "VND",
	});

	var priceRange = $(".ui-slider-handle.ui-corner-all.ui-state-default");
	if ($("#left").val() == '') {
		priceRange[0].style.left = '0%';
	} else {
		priceRange[0].style.left = $("#left").val() + "%";
	}


	if ($("#right").val() == 0) {
		priceRange[1].style.left = '100%';
	} else {
		priceRange[1].style.left = $("#right").val() + "%";
	}


	priceFirst = $("#price_first").val();
	priceFirst = VND.format(priceFirst);
	priceSecond = $("#price_second").val();
	priceSecond = VND.format(priceSecond);

	if ($("#right").val() == 0) {
		$("#right").val(100);
	}
	if ($("#left").val() === '') {
		$("#left").val(0);
	}

	width = parseFloat($("#right").val()) - parseFloat($("#left").val());

	$(".ui-slider-range.ui-corner-all.ui-widget-header").attr(
		"style",
		"left: " + $("#left").val() + ";width: " + width + "%"
	);
	if (priceFirst == '0 ₫' && priceSecond == '0 ₫') {
		$("#flt_price").html("50.000đ" + " - " + "10.000.000đ");
	} else {
		$("#flt_price").html(priceFirst + " - " + priceSecond);
	}


}



$(document).ready(function () {

	$(".custom_select select[name=filter_order]").change(function () {
		//alert(1);
		$("#adminForm").submit();
	});

	$(".custom_select select[name=filter_showing]").change(function () {
		//alert(1);
		$("#adminForm").submit();
	});

	$("#btnSubmitPrice").click(function () {
		var priceRange = $(".ui-slider-handle.ui-corner-all.ui-state-default");
		$("#left").val(priceRange[0].style.left);
		$("#right").val(priceRange[1].style.left);
		$("#adminForm").submit();
	});

	showPriceRange();
});
