(function ($) {
  $(document).on("click", ".delete", function (e) {
    let $closestRefund = $(this).closest(".refunds");
    console.log($closestRefund);
    let $id = $closestRefund[0].classList[1];
    refNum = $id.slice(7);
    const element = document.querySelector(`.${$id}`);

    $.ajax("delete_refund.php", {
      type: "POST",
      dataType: "html",
      data: { refid: refNum },
    }).done(function (result) {
      console.log(result);
      element.remove();
    });
  });
})(jQuery);
