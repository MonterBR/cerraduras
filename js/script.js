$(document).ready(function(){
	
	// Agregando clase active al primer enlace =======================
	$('.category_list .category_Item[category="all"]').addClass('ct_item-active')

	//FILTRANDO LOS PRODUCTOS =========================================

	$('.category_Item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		//Agregando clase active al enlace seleccionado =======================
		$('.category_Item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		//OCULTANDO PRODUCTOS ==================================
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);


		//MOSTRANDO PRODUCTOS ===========================================
		function showProduct(){
			$('.product-item[category="'+catProduct+'"]').show();
			$('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)')
		} setTimeout(showProduct,400)
	})

	// MOSTRANDO TODOS LOS PRODUCTOS ===================================

	$('.category_Item[category="all"]').click(function() {
		function showAll (){
			$('.product-item').show();
			$('.product-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	})
});
