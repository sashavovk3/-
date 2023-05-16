$(document).ready(function(){
	$(document).on("click",".modal_btn-1",function(){$("#small-modal-1").arcticmodal()});
	$(document).on("click",".modal_btn-2",function(){$("#small-modal-2").arcticmodal()});
	$(document).on("click",".modal_btn-3",function(){$("#small-modal-3").arcticmodal()});
	$(document).on("click",".services-item__text a",function(){$("#small-modal-4").arcticmodal()});
	$(".form-modal .form-input, .form-modal .form-submit, .price-right__form .form-input, .price-right__form .form-submit").click(function(){$(this).removeClass("input-error")})
});