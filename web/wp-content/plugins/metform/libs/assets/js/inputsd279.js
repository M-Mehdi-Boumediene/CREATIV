(function ($, elementor) {
	"use strict";

	var MetForm = {

		init: function () {
			var widgets = {
				'mf-range.default': MetForm.RangeInput,
				'mf-date.default': MetForm.DateInput,
				'mf-time.default': MetForm.TimeInput,
				'mf-select.default': MetForm.SelectInput,
				'mf-multi-select.default': MetForm.MultiSelectInput,
				'mf-rating.default': MetForm.Rating,
				'mf-file-upload.default': MetForm.fileUpload,

			};
			$.each(widgets, function (widget, callback) {
				elementor.hooks.addAction('frontend/element_ready/' + widget, callback);
			});
		},

		RangeInput: function ($scope) {
			var el = $scope.find('.mf-rs-range');
			var min = el.attr('min');
			var max = el.attr('max');
			var step = el.attr('step');
			var range = el.attr('range');

			var config = {
				step: step,
				min: min,
				max: max,
			}

			if (range == 'true') config.range = Boolean(range);

			el.asRange(config);

			el.on('asRange::change', function (e) {
				var val = $(this).asRange('get');

				if(Array.isArray(val)){
					val = Number(val[1]) - Number(val[0]);
				}
				$(this).val(val).trigger('change');
			});
		},

		DateInput: function ($scope) {
			var el = $scope.find('.mf-date-input'),
				minDate = el.attr('data-mfMinDate'),
				maxDate = el.attr('data-mfMaxDate'),
				rangeDate = el.attr('data-mfRangeDate'),
				dateFormat = el.attr('data-mfDateFormat'),
				enableTime = el.attr('data-mfEnableTime'),
				disableDates = el.attr('data-mfDisableDates'),
				wrapper = $scope.find('.mf-input-wrapper');

			var config = {
				appendTo: wrapper.get(0),
			}
			
			if (enableTime == 'yes') { 
				config.enableTime = true;
				dateFormat = dateFormat+" H:i"; 
			};

			if (disableDates != '') { config.disable = JSON.parse(disableDates) };
			if (minDate != '') { config.minDate = minDate };
			if (maxDate != '') { config.maxDate = maxDate };
			if (rangeDate == 'yes') { config.mode = 'range' };

			config.dateFormat = dateFormat;

			el.flatpickr(config);
		},

		TimeInput: function ($scope) {
			var el = $scope.find('.mf-input-time');
			var time24h = el.attr('mftime24h');
			var wrapper = $scope.find('.mf-input-wrapper');
			var config = {
				appendTo: wrapper.get(0),
				dateFormat: "h:i K",
				enableTime: true,
				noCalendar: true
			}

			if (time24h == 'yes') {
				config.dateFormat = 'H:i';
				config.time_24hr = true;
			}

			el.flatpickr(config);
		},

		SelectInput: function ($scope) {
			var el = $scope.find('select.mf-input-select');

			el.select2({
				dropdownParent: $scope.find('.mf-input-wrapper')
			});
		},

		MultiSelectInput: function ($scope) {
			var el = $scope.find('select.mf-input-multiselect');
			el.select2({
				dropdownParent: $scope.find('.mf-input-wrapper')
			});
		},

		Rating: function ($scope) {
			var el = $scope.find('.mf-input-rating li');
			el.on('mouseover', function () {
				var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
				$(this).parent().children('li.star-li').each(function (e) {
					if (e < onStar) {
						$(this).addClass('hover');
					}
					else {
						$(this).removeClass('hover');
					}
				});

			}).on('mouseout', function () {
				$(this).parent().children('li.star-li').each(function (e) {
					$(this).removeClass('hover');
				});
			});


			el.on('click', function () {
				var onStar = parseInt($(this).data('value'), 10);
				var stars = $(this).parent().children('li.star-li');

				for (let i = 0; i < stars.length; i++) {
					$(stars[i]).removeClass('selected');
				}

				for (let i = 0; i < onStar; i++) {
					$(stars[i]).addClass('selected');
				}

				var displayId = $(this).parents().find('input.mf-input-hidden');
				displayId.val(onStar);

				var msg = "";
				if (onStar > 1) {
					msg = "<strong>" + onStar + "</strong>";
				}
				else {
					msg = "<strong>" + onStar + " </strong>";
				}

			});
		},

		fileUpload: function($scope){
			$scope.find('.mf-input-file-upload').on('change', function(){
				var image = $(this).val().match(/\\([^\\]+)$/)[1];
			
				$scope.find('.mf-file-name span').html(image);
			});
		},

		// it's already trigger change function, so this is not necessary
		// ImageSelect: function($scope){
		// 	var el = $scope.find('.mf-input-wrapper .mf-image-select-input[type="radio"]');

		// 	el.on('click', function (e) {
		// 		el.trigger('change');
		// 	});
		// },

		// it's already trigger change function, so this is not necessary
		// ToggleSelect: function($scope){
		// 	var el = $scope.find('.mf-input-wrapper .mf-toggle-select-input[type="radio"]');

		// 	el.on('click', function (e) {
		// 		el.trigger('change');
		// 	});
		// },
	};

	$(window).on('elementor/frontend/init', MetForm.init);


}(jQuery, window.elementorFrontend));