
function bgHeader(){
    var header = $('.header');
    var scrollTop = $(window).scrollTop();
    var currentPage = window.location.pathname;
    if (currentPage === '/') {
        header.css('background-color', 'transparent');
        if (scrollTop > 50) {
            header.css('background-color', 'rgba(52, 52, 52, 1)');
        } else {
        header.css('background-color', 'transparent');

        }
    }
    else {
        header.css('background-color', 'rgba(52, 52, 52, 1)');
    }
  }

  bgHeader();
  $(window).scroll(function() {
    bgHeader();
  });
$(document).on('click', function(event) {
    const $sidebar = $('.right-list');
    const $svgIcon = $('img.icon');
    if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 &&
        !$svgIcon.is(event.target) && $svgIcon.has(event.target).length === 0) {
        if ($sidebar.css('right') === '0px') {
            $sidebar.css('right', '-30rem');
        }
    }
});

$('img.icon').on('click', function(event) {
    event.stopPropagation();
    const $sidebar = $('.right-list');

    if ($sidebar.css('right') === '0px') {
        $sidebar.css('right', '-30rem');
    } else {
        $sidebar.css('right', '0');
    }
});
$('.submit_btn').on('click', function () {
    $('.form_search').submit();
});

// Setup handlers for each group
function updateHiddenInputAndActiveClass(groupName, hiddenInputId) {
    $('.group-options.' + groupName + ' input[type="radio"]').each(function () {
        if ($(this).prop('checked')) {
            $(this).closest('.option').addClass('active');
        }
    });

    // When custom radio clicked
    $('.group-options.' + groupName + ' .custom-radio').click(function () {
        const selectedValue = $(this).data('value');
        const $parentOption = $(this).closest('.option');
        const $group = $parentOption.closest('.group-options');

        $group.find('.option').removeClass('active');
        $parentOption.addClass('active');
        $parentOption.find('input[type="radio"]').prop('checked', true);
    });
}

// Apply function to all dropdowns
updateHiddenInputAndActiveClass('property-type', 'property_type');
updateHiddenInputAndActiveClass('bathroom-group', 'bathrooms');
updateHiddenInputAndActiveClass('bedroom-group', 'bedrooms');

// Dropdown show/hide
$('.options-selected').click(function () {
    var $currentAbs = $(this).next('.abs');
    $('.abs').not($currentAbs).slideUp(200);
    $('.options-selected').not(this).removeClass('active');
    $currentAbs.slideToggle(200);
    $(this).toggleClass('active');
});

// Done button functionality
$('.done').click(function () {
    const $abs = $(this).closest('.abs');
    const $group = $abs.find('.group-options');

    const $selectedRadio = $group.find('input[type="radio"]:checked');
    if ($selectedRadio.length > 0) {
        const selectedValue = $selectedRadio.val();
        const $hiddenInput = $group.find('input[type="hidden"]');
        $hiddenInput.val(selectedValue);
        console.log('Hidden input updated:', $hiddenInput.attr('id'), '=', selectedValue);
    }

    $abs.slideUp(200);
    $abs.prev('.options-selected').removeClass('active');
});

// Reset button functionality
$('.reset').click(function () {
    const $container = $(this).closest('.abs');
    $container.find('input[type="hidden"]').val('');
    $container.find('.group-options .option').removeClass('active');
    $container.find('input[type="radio"]').prop('checked', false);
});