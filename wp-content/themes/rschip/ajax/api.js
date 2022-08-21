function deleteCookie(name) {
	setCookie(name, "", {
		expires: -1
	})
}

jQuery(document).ready(function() {

	$('.catalog__btn-select').click(function() {
		window.location.href = '/shop/cart1.html?variation_id=160&add-to-cart=16&attribute_pa_smartphone-controlled=no';
	});

	if ($('#api-car').length > 0) {

		$('#api-car, #api-model, #api-modi').styler({
			selectSearch: true
		});

		var nm = getCookie('nm');
		var hp = getCookie('hp');
		if (nm == 'undefined' || hp == 'undefined') {
			deleteCookie('brand_id');
			deleteCookie('model_id');
			deleteCookie('modi_id');
			deleteCookie('brand');
			deleteCookie('model');
			deleteCookie('modi');
			deleteCookie('hpls');
			deleteCookie('nmls');
			deleteCookie('mpg');
			deleteCookie('nm');
			deleteCookie('hp');
		}

		var bbrand = '';
		var bmodel = '';
		var bmodi = '';
		var bbrand_name = '';
		var bmodel_name = '';
		var bmodi_name = '';

		var notFromCatalog = !brand_;
		var hasCookie = getCookie('brand_id') != '' && getCookie('brand_id') != undefined;
		var notIndexPage = $('#api-car').closest('.top-block').length == 0;
		if ( hasCookie && notFromCatalog && notIndexPage ) {
			bbrand = getCookie('brand_id');
			bmodel = getCookie('model_id');
			bmodi = getCookie('modi_id');

			bbrand_name = getCookie('brand');
			bmodel_name = getCookie('model');
			bmodi_name = getCookie('modi');
		} else {
			if (brand_id_ != '') {
				bbrand = brand_id_;
				bbrand_name = brand_;
			}
			if (model_id_ != '') {
				bmodel = model_id_;
				bmodel_name = model_;
			}
			if (modi_id_ != '') {
				bmodi = modi_id_;
				bmodi_name = modi_;
			}
		}

		// первый запуск
		uploadBrand(bbrand);
		// uploadModel(bmodel, bbrand);
		// uploadModi(bmodi, bmodel);

		// прячем селект
		$('button.catalog__btn-select').attr('disabled', 'disabled');
		$('.hide-block-1').addClass('blurred');

		// отлавливаем события
		$('#api-car').change(function() {
			$('.hide-block-1').addClass('blurred');
			uploadModel('', $('#api-car').val());
			uploadModi('', '');
			$('#api-model').removeAttr('disabled');
			$('#api-modi').attr({ disabled: 'disabled' });
			$('button.catalog__btn-select').attr('disabled', 'disabled');
		});

		$('#api-model').change(function() {
			$('.hide-block-1').addClass('blurred');
			uploadModi('', $('#api-model').val());
			$('#api-modi').removeAttr('disabled');
			$('button.catalog__btn-select').attr('disabled', 'disabled');
		});

		$('#api-modi').change(function() {
			saveCoockie();
			$('.hide-block-1').removeClass('blurred');
			$('button.catalog__btn-select').removeAttr("disabled");
			$('#api-modi').parent().removeClass('border-select');
		});

		function uploadBrand(id_brand) {
			var $select = $('#api-car');
			preloader($select, true);
			var data = {
				action: 'api',
				url: 'getbrands'
			}

			$.post('/wp-admin/admin-ajax.php', data, function(response) {
				var brandsData = JSON.parse(response);
				var brands = brandsData.data;
				$select.styler('destroy');
				$select.html('');
				$select.append('<option value=""></option>');

				for (var i = 0; i < brands.length; i++) {
					var sel = '';
					if (id_brand == brands[i].id) {
						sel = 'selected';
					}
					$select.append('<option ' + sel + ' value="' + brands[i].id + '">' + brands[i].title + '</option>');
				}


				$select.styler({
					selectSearch: true
				});

				preloader($select, false);

			});

			uploadModel(bmodel, id_brand);
		}


		function uploadModel(id_model, id_brand) {
			var $select = $('#api-model');
			if (id_model == '' && id_brand == '') {
				$('#api-model').styler('destroy');
				$('#api-model').styler({
					selectSearch: true
				});
				$('#api-model').attr({ disabled: 'disabled' });
				$('#api-model').trigger('refresh');
				uploadModi(bmodi, id_model);
			} else if (id_brand != '') {
				preloader($select, true);
				var dataModel = {
					action: 'api',
					url: 'brand=' + id_brand
				}
				$.post('/wp-admin/admin-ajax.php', dataModel, function(response) {
					var modelsData = JSON.parse(response);
					var models = modelsData.data;

					$('#api-model').styler('destroy');
					$('#api-model').html('');
					$('#api-model').append('<option value=""></option>');

					for (var i = 0; i < models.length; i++) {
						var sel = '';
						if (id_model == models[i].id) {
							sel = 'selected';
						}
						$('#api-model').append('<option ' + sel + ' value="' + models[i].id + '">' + models[i].title + '</option>');
					}
					$('#api-model').styler({
						selectSearch: true
					});
					$('#api-model').removeAttr('disabled');
					preloader($select, false);

					uploadModi(bmodi, id_model);
				});

				$('#api-model').parent().addClass('border-select');
			}
		}

		function uploadModi(id_modi, id_model) {
			var $select = $('#api-modi');
			if (id_modi == '' && id_model == '') {
				$('#api-modi').styler('destroy');
				$('#api-modi').styler({
					selectSearch: true
				});
				$('#api-modi').attr({ disabled: 'disabled' });
				$('#api-modi').trigger('refresh');
			} else if (id_model != '') {
				preloader($select, true);
				$('button.catalog__btn-select').removeAttr("disabled");
				if (id_modi != '') {
					$('.hide-block-1').removeClass('blurred');
				}

				var dataModi = {
					action: 'api',
					url: 'model=' + id_model
				}
				$.post('/wp-admin/admin-ajax.php', dataModi, function(response) {
					var modiData = JSON.parse(response);
					var modi = modiData.data;

					$('#api-modi').styler('destroy');
					$('#api-modi').html('');
					$('#api-modi').append('<option value=""></option>');

					for (var i = 0; i < modi.length; i++) {
						var sel = '';
						if (id_modi == modi[i].id) {
							sel = 'selected';
						}

						$('#api-modi').append('<option ' + sel + ' data-hp="' + modi[i].hp + '" data-nm="' + modi[i].nm + '" value="' + modi[i].id + '">' + modi[i].title + ' ' + modi[i].hp + 'HP ' + modi[i].nm + 'NM' + '</option>');
					}

					$('#api-modi').styler({
						selectSearch: true
					});
					$('#api-modi').removeAttr('disabled');
					preloader($select, false);
				});

				$('#api-model').parent().removeClass('border-select');
				$('#api-modi').parent().addClass('border-select');
			}
		}

		function saveCoockie() {
			setCookie('brand', $('#api-car option:selected').text(), '', '/');
			setCookie('brand_id', $('#api-car').val(), '', '/');

			setCookie('model', $('#api-model option:selected').text(), '', '/');
			setCookie('model_id', $('#api-model').val(), '', '/');

			setCookie('modi', $('#api-modi option:selected').text(), '', '/');
			setCookie('modi_id', $('#api-modi').val(), '', '/');


			var hp = $('#api-modi option:selected').data('hp');
			var nm = $('#api-modi option:selected').data('nm');
			$('.info-hp').html(hp + ' hp | ' + nm + ' Nm');

			setCookie('hp', hp, '', '/');
			setCookie('nm', nm, '', '/');

			// if (parseInt(hp) < 300) {
				// 11
				var per11 = Math.round(parseInt(hp) * 11 / 100);
				var all11= per11 + parseInt(hp);

				var perNm11 = Math.round(parseInt(nm) * 11 / 100);
				var allNm11 = perNm11 + parseInt(nm);

				//15
				var per15 = Math.round(parseInt(hp) * 15 / 100);
				var all15= per15 + parseInt(hp);

				var perNm15 = Math.round(parseInt(nm) * 15 / 100);
				var allNm15 = perNm15 + parseInt(nm);


				// new verstka blya
				$('.hp1').find('span').html('+ '+per11+'&nbsp;HP');
				$('.np1').find('span').html('+ '+perNm11+'&nbsp;NM');
				$('.hpnm1').html('Up to +'+per11+' HP +'+perNm11+' NM');

				$('.hp2').find('span').html('+ '+per15+'&nbsp;HP');
				$('.np2').find('span').html('+ '+perNm15+'&nbsp;NM');
				$('.hpnp2').html('Up to +'+per15+' HP +'+perNm15+' NM');


				$('#hp-car').find('b').html('+' + per11 + ' ');
				$('#nm-car').find('b').html('+' + perNm11 + ' ');
				$('#mpg-car').find('b').html('+11% ');
				// $('#result-hp').html(all11 + ' Hp');
				// $('#result-nm').html(allNm11 + ' Nm');
				$('#result-hp').html(hp + ' Hp');
				$('#result-nm').html(nm + ' Nm');

				$('#result-hp-plus').html('+ <em>' + per11 + '</em> Hp');
				$('#result-nm-plus').html('+ <em>' + perNm11 + '</em> Nm');
				$(".shop-product__hidden-checkbox").prop({'checked':'checked'});
				//$('.w-product').toggleClass('show', true);
				$.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				data: {
					action: 'price_no'
				},
				success: function(data) {
					$('#rschip_price').html('$ ' + data),
						$('#footer_app_price').html('$ ' + data);
						var data2 = parseInt(data) + 100;
						$('#footer_app_price_line').html('$ ' + data2),
						$('.page-popup .product__price').find('span').html('from $ ' + data)
				}
			});

				setCookie('hpls', per11, '', '/');
				setCookie('nmls', perNm11, '', '/');
				setCookie('mpg', '11', '', '/');
			// }

			// if (parseInt(hp) >= 300) {
			// 	// 12
			// 	var per5 = Math.round(parseInt(hp) * 5 / 100);
			// 	var all5 = per5 + parseInt(hp);

			// 	var perNm5 = Math.round(parseInt(nm) * 5 / 100);
			// 	var allNm5 = perNm5 + parseInt(nm);

			// 	$('#hp-car').find('b').html('+' + per5 + ' ');
			// 	$('#nm-car').find('b').html('+' + perNm5 + ' ');
			// 	$('#mpg-car').find('b').html('+5% ');
			// 	// $('#result-hp').html(all5 + ' Hp');
			// 	// $('#result-nm').html(allNm5 + ' Nm');
			// 	$('#result-hp').html(hp + ' Hp');
			// 	$('#result-nm').html(nm + ' Nm');

			// 	setCookie('hpls', per5, '', '/');
			// 	setCookie('nmls', perNm5, '', '/');
			// 	setCookie('mpg', '5', '', '/');
			// }

			$('.brand').html($('#api-car option:selected').text());
			$('#pre_car').val($('#api-car option:selected').text());

			$('.model').html($('#api-model option:selected').text());
			$('#pre_model').val($('#api-model option:selected').text());

			$('.modi').html($('#api-modi option:selected').text());
			$('#pre_modification').val($('#api-modi option:selected').text());
		}

		function preloader ($elem, boolean) {
			var showPreloader = boolean
			if (showPreloader) {
				$elem.addClass('is-loading')
				$elem.trigger('refresh')
			} else {
				$elem.removeClass('is-loading')
				$elem.trigger('refresh')
			}
		}

		if ($('#customer_details').length > 0) {
			$(window).unload(function() {
				// sinhronize
				var formdata = new FormData($('form.checkout'));
				console.log(formdata);

				// $.ajax({
				//   url: "test.html",
				//   async: false,
				//   success: function(){
				//     $(this).addClass("done");
				//   }
				// });
			});
		}

		$('.eco-calc__input').keyup(function() {
			if ($('#eco-calc-1').val() != '' && $('#eco-calc-2').val() != '' && $('#eco-calc-3').val() != '') {
				var x = parseInt($('#eco-calc-1').val());
				var y = parseInt($('#eco-calc-2').val());
				var z = parseInt($('#eco-calc-3').val());
				var price_eco = (x / y) * z * 0.15
				$('.eco-calc__result-text').text('$' + price_eco);
			}

		});

	}

	if (bbrand_name != '' && bbrand_name != undefined) {
		bbrand_name = bbrand_name.charAt(0).toUpperCase() + bbrand_name.substr(1);
		bbrand_name = bbrand_name.replace(/_/g, " ");
	}

	if (bmodel_name != '' && bmodel_name != undefined) {
		bmodel_name = bmodel_name.charAt(0).toUpperCase() + bmodel_name.substr(1);
		bmodel_name = bmodel_name.replace(/_/g, " ");
	}


	if (bmodi_name != '' && bmodi_name != undefined) {
		bmodi_name = bmodi_name.replace(/_/g, " ");
	}

	$('.brand').html(bbrand_name);
	$('#pre_car').val(bbrand_name);

	$('.model').html(bmodel_name);
	$('#pre_model').val(bmodel_name);

	$('.modi').html(bmodi_name);
	$('#pre_modification').val(bmodi_name);

	if (hp_ !== null && hp_ != '') {
		var bhp = hp_;
	} else if (getCookie('hp') !== null) {
		var bhp = getCookie('hp');
	} else {
		var bhp = '';
	}
	if (nm_ !== null && nm_ != '') {
		var bnm = nm_;
	} else if (getCookie('nm') !== null) {
		var bnm = getCookie('nm');
	} else {
		var bnm = '';
	}

	$('.info-hp').html(bhp + ' hp | ' + bnm + ' Nm');

	var hp = bhp;
	var nm = bnm;

	// if (parseInt(hp) < 300) {
		// 12
		var per11 = Math.round(parseInt(hp) * 11 / 100);
		var all11 = per11 + parseInt(hp);

		var perNm11 = Math.round(parseInt(nm) * 11 / 100);
		var allNm11 = perNm11 + parseInt(nm);

		$('#hp-car').find('b').html('+' + per11 + ' ');
		$('#nm-car').find('b').html('+' + perNm11 + ' ');
		$('#mpg-car').find('b').html('+11% ');
		$('#result-hp').html(hp + ' Hp');
		$('#result-nm').html(nm + ' Nm');

		$('#result-hp-plus').html('+ <em>' + per11 + '</em> Hp');
		$('#result-nm-plus').html('+ <em>' + perNm11 + '</em> Nm');
		if (bmodi_name != '' && bmodi_name != undefined) {
			$(".shop-product__hidden-checkbox").prop({'checked':'checked'});
			//$('.w-product').toggleClass('show', true);
		}
		$.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				data: {
					action: 'price_no'
				},
				success: function(data) {
					$('#rschip_price').html('$ ' + data),
						$('#footer_app_price').html('$ ' + data);
						var data2 = parseInt(data) + 100;
						$('#footer_app_price_line').html('$ ' + data2),
						$('.page-popup .product__price').find('span').html('from $ ' + data)
				}
			});

	// }

	// if (parseInt(hp) >= 300) {
	// 	// 12
	// 	var per5 = Math.round(parseInt(hp) * 5 / 100);
	// 	var all5 = per5 + parseInt(hp);

	// 	var perNm5 = Math.round(parseInt(nm) * 5 / 100);
	// 	var allNm5 = perNm5 + parseInt(nm);

	// 	$('#hp-car').find('b').html('+' + per5 + ' ');
	// 	$('#nm-car').find('b').html('+' + perNm5 + ' ');
	// 	$('#mpg-car').find('b').html('+5% ');
	// 	$('#result-hp').html(all5 + ' Hp');
	// 	$('#result-nm').html(allNm5 + ' Nm');

	// }

	$('.catalog__btn-select').click(function(event) {
		event.preventDefault();

		if ((brand_id_ != '' /*|| getCookie('brand') != ''*/ ) &&
			(model_id_ != '' /*|| getCookie('model') != ''*/ ) &&
			(modi_id_ != '' /*|| getCookie('modi') != ''*/ )) {
			console.log('if');
			if (brand_id_ != '') {
				var bbrand = brand_ + '/';
				// } else if (getCookie('brand') !== null) {
				// 	var bbrand = getCookie('brand')+'/';
			} else {
				var bbrand = '';
			}
			bbrand = bbrand.toLowerCase().replace(/ /g, '_');


			if (model_id_ != '') {
				var bmodel = model_ + '/';
				// } else if (getCookie('model') !== null) {
				// 	var bmodel = getCookie('model')+'/';
			} else {
				var bmodel = '';
			}
			bmodel = bmodel.toLowerCase().replace(/ /g, '_');

			if (modi_id_ != '') {
				var bmodi = modi_ + '/';
				// } else if (getCookie('modi') !== null) {
				// 	var bmodi = getCookie('modi')+'/';
			} else {
				var bmodi = '';
			}
			bmodi = bmodi.toLowerCase().replace(/ /g, '_');

			window.document.location.href = '/shop/' + bbrand + bmodel + bmodi;

		}

	});
});

jQuery(document).ready(function() {
	$("#cartProduct1").prop('checked', false);
	$("#cartProduct2").prop('checked', false);
	$('.w-product__btn').click(function() {
		var checked = $(".shop-product__hidden-checkbox:checked").length;
		console.log(checked);
		if (!checked) {
			var inst = $('[data-remodal-id=noProducts]').remodal();
			inst.open();
			return false;
		} else {

			if (brand_ != '' && brand_ != undefined && brand_ != null) {
				bbrand = brand_;
				bmodel = model_;
				bmodi = modi_;
				bhp = hp_;
				bnm = nm_;
			} else {
				bbrand = getCookie('brand');
				bmodel = getCookie('model');
				bmodi = getCookie('modi');
				bhp = getCookie('hp');
				bnm = getCookie('nm');
			}

			bbrand = bbrand.toLowerCase().replace(/ /g, '_');
			bmodel = bmodel.toLowerCase().replace(/ /g, '_');
			bmodi = bmodi.toLowerCase().replace(/ /g, '_');

			setCookie('brand', bbrand, '', '/');
			setCookie('model', bmodel, '', '/');
			setCookie('modi', bmodi, '', '/');
			setCookie('hp', bhp, '', '/');
			setCookie('nm', bnm, '', '/');

			var hp = bhp;
			var nm = bnm;
			// if (parseInt(hp) < 300) {
				// 12
				var per11 = Math.round(parseInt(hp) * 11 / 100);
				var all11 = per11 + parseInt(hp);

				var perNm11 = Math.round(parseInt(nm) * 11 / 100);
				var allNm11 = perNm11 + parseInt(nm);

				//15
				var per15 = Math.round(parseInt(hp) * 15 / 100);
				var all15= per15 + parseInt(hp);

				var perNm15 = Math.round(parseInt(nm) * 15 / 100);
				var allNm15 = perNm15 + parseInt(nm);


				// new verstka blya
				$('.hp1').find('span').html('+ '+per11+'&nbsp;HP');
				$('.np1').find('span').html('+ '+perNm11+'&nbsp;NM');
				$('.hpnm1').html('Up to +'+per11+' HP +'+perNm11+' NM');

				$('.hp2').find('span').html('+ '+per15+'&nbsp;HP');
				$('.np2').find('span').html('+ '+perNm15+'&nbsp;NM');
				$('.hpnp2').html('Up to +'+per15+' HP +'+perNm15+' NM');


				$('#hp-car').find('b').html('+' + per11 + ' ');
				$('#nm-car').find('b').html('+' + perNm11 + ' ');
				$('#mpg-car').find('b').html('+11% ');
				$('#result-hp').html(hp + ' Hp');
				$('#result-nm').html(nm + ' Nm');

				$('#result-hp-plus').html('+ <em>' + per11 + '</em> Hp');
				$('#result-nm-plus').html('+ <em>' + perNm11 + '</em> Nm');
			
				if (bmodi != '' && bmodi != undefined) {
					$(".shop-product__hidden-checkbox").prop({'checked':'checked'});
					//$('.w-product').toggleClass('show', true);
				}
				$.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				data: {
					action: 'price_no'
				},
				success: function(data) {
					$('#rschip_price').html('$ ' + data),
						$('#footer_app_price').html('$ ' + data);
						var data2 = parseInt(data) + 100;
						$('#footer_app_price_line').html('$ ' + data2),
						$('.page-popup .product__price').find('span').html('from $ ' + data)
				}
			});

				setCookie('hpls', per11, '', '/');
				setCookie('nmls', perNm11, '', '/');
				setCookie('mpg', '11', '', '/');
			// }

			// if (parseInt(hp) >= 300) {
			// 	// 12
			// 	var per5 = Math.round(parseInt(hp) * 5 / 100);
			// 	var all5 = per5 + parseInt(hp);

			// 	var perNm5 = Math.round(parseInt(nm) * 5 / 100);
			// 	var allNm5 = perNm5 + parseInt(nm);

			// 	$('#hp-car').find('b').html('+' + per5 + ' ');
			// 	$('#nm-car').find('b').html('+' + perNm5 + ' ');
			// 	$('#mpg-car').find('b').html('+5% ');
			// 	$('#result-hp').html(all5 + ' Hp');
			// 	$('#result-nm').html(allNm5 + ' Nm');

			// 	setCookie('hpls', per5, '', '/');
			// 	setCookie('nmls', perNm5, '', '/');
			// 	setCookie('mpg', '5', '', '/');
			// }
			window.location.href = '/shop/cart1.html?variation_id=160&add-to-cart=16&attribute_pa_smartphone-controlled=no';
		}
	});
});


jQuery(document).ready(function() {


	// on select check app status 
	// price logic
	var rs = '0';
	var monte = '0';

	
	$(document).on('click', '#rs-select', function(){
		console.log('rs');
		$('.w-product').toggleClass('show', true);
		$('.w-product__btn').prop( "disabled", true );
		rs = '1';
		monte = '0';
		$.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			data: {
				action: 'price_no'
			},
			success: function(data) {
				$('#rschip_price').html('$ ' + data),
					$('#footer_app_price').html('$ ' + data);
					var data2 = parseInt(data) + 100;
					$('#footer_app_price_line').html('$ ' + data2);
					$('.page-popup .product__price').find('span').html('from $ ' + data);
					$('.w-product__btn').prop( "disabled", false );
			}
		});
		$("#cartProduct1").prop('checked', true);
		$("#cartProduct2").prop('checked', false);
	});
	$(document).on('click', '#gtr-select', function(){
		console.log('gtr');
		$('.w-product').toggleClass('show', true);
		$('.w-product__btn').prop( "disabled", true );
		monte = '1';
		rs = '0';
		$.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			data: {
				action: 'rseco_price'
			},
			success: function(data) {
				$('#footer_app_price').html('$ ' + data);
				var data2 = parseInt(data) + 100;
				$('#footer_app_price_line').html('$ ' + data2);
				$('.page-popup .product__price').find('span').html('from $ ' + data);
				$('.w-product__btn').prop( "disabled", false );
			}
		});
		$("#cartProduct2").prop('checked', true);
		$("#cartProduct1").prop('checked', false);
	});
	// On click add to cart and go to cart url
	// add to cart logic
	$('.w-product__btn').on('click', function() {
		var check_rschipus = $("#cartProduct1:checked").length;
		var rschipus_app = jQuery(".shop__products-col #cartProduct1").parent().find(".withapp_check").length;
		var check_rseco = $("#cartProduct2:checked").length;

		if (check_rseco == '1' && check_rschipus == '1' && rschipus_app == '1') {
			$.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				data: {
					action: 'both_add_to_cart_with_app'
				},
				success: function(data) {
					var delay = 500;
					setTimeout(function() { window.location = window.location = '/shop/cart1.html'; }, delay);

				}
			})


		} else if (check_rseco == '1' && check_rschipus == '1' && rschipus_app == '0') {
			// no app
			$.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				data: {
					action: 'both_add_to_cart_no_app'
				},
				success: function(data) {
					var delay = 500;
					setTimeout(function() { window.location = window.location = '/shop/cart1.html'; }, delay);

				}
			})

		} else if (check_rseco == '1' && check_rschipus == '0') {
			$.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				data: {
					action: 'rseco_add_to_cart'
				},
				success: function(data) {
					var delay = 500;
					setTimeout(function() { window.location = window.location = '/shop/cart1.html'; }, delay);
				}
			});

		} else if (check_rseco == '0' && check_rschipus == '1' && rschipus_app == '0') {
			//no app
			window.location.href = '/shop/cart1.html?variation_id=160&add-to-cart=16&attribute_pa_smartphone-controlled=no';
		} else if (check_rseco == '0' && check_rschipus == '1' && rschipus_app == '1') {
			//no app
			window.location.href = '/shop/cart1.html?variation_id=159&add-to-cart=16&attribute_pa_smartphone-controlled=yes';
		}
	});
	// END On click add to cart and go to cart url
});


/**
 * on index page
 * when select change get href from hidden btn
 * and go to url
 */
$(function () {
	var $topBlock = $('.top-block');
	var $select = $('#api-modi', $topBlock);

	if ($select.length) {
		$select.on('change', function () {
			var href = $topBlock.find('.top-block__btn').attr('href')
			if (href) { window.location.href = href; }
		})
	}
})