(function ($) {
  $(document).on("input", ".ord_cust_id", function (e) {
    let $input = e.target.value;
    let $closestRefund = document.querySelector(".refund");
    $.ajax("refunds_results.php", {
      type: "POST",
      dataType: "html",
      data: { inputs: $input },
      success: function (data) {
        $closestRefund.innerHTML = "";
        $closestRefund.innerHTML = data;
      },
    });
  });
})(jQuery);
