// function bgHeader(){
//     var header = $('.header');
//     var scrollTop = $(window).scrollTop();
//     var currentPage = window.location.pathname;
//     if (currentPage === '/') {
//         header.css('background-color', 'transparent');
//         if (scrollTop > 50) {
//             header.css('background-color', '#383838');
//         } else {
//         header.css('background-color', 'transparent');

//         }
//     }
//     else {
//         header.css('background-color', '#383838');
//     }
//   }

//   bgHeader();
//   $(window).scroll(function() {
//     bgHeader();
//   });
$(document).on('click', function (event) {
    const $sidebar = $('.right-list');
    const $svgIcon = $('img.icon');
    if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 &&
        !$svgIcon.is(event.target) && $svgIcon.has(event.target).length === 0) {
        if ($sidebar.css('right') === '0px') {
            $sidebar.css('right', '-30rem');
        }
    }
});

$('img.icon').on('click', function (event) {
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

$(document).ready(function () {
    var $buttons = $(".services .container_buttons .buttons div");
    var $propertyCards = $(".services .grid-container .col");

    $buttons.on("click", function () {
        $buttons.removeClass("active");
        $(this).addClass("active");

        // convert button text into snake_case
        var category = $(this).text().trim().toLowerCase().replace(/\s+/g, "_");

        $propertyCards.each(function () {
            var $card = $(this);
            var type = ($card.data("type") || "").toString().toLowerCase();

            if (category === "all" || type === category) {
                $card.stop(true, true).css("display", "block");
                $card.removeClass("animated-out");
            } else {
                $card.addClass("animated-out");
                setTimeout(() => {
                    $card.css("display", "none");
                }, 400);
            }
        });
    });

    $('.services .content .grid-container .desc, .content_result .grid-container .desc, .footer .desc_min.desc').each(function () {
        var fullText = $(this).text().trim();
        if (fullText.length > 100) {
            var truncatedText = fullText.substring(0, 100) + '...';
            $(this).text(truncatedText);
            var readMore = $('<span class="read-more">Read more</span>');
            $(this).append(readMore);
            readMore.on('click', function () {
                var desc = $(this).parent();
                if (desc.hasClass('expanded')) {
                    desc.text(truncatedText);
                    desc.append(readMore);
                    $(this).text('Read more');
                } else {
                    desc.text(fullText);
                    desc.append(readMore);
                    desc.addClass('expanded');
                    readMore.text('');
                }
            });
        }
    });
    $(".faq-question").click(function () {
        var $item = $(this).closest(".faq-item");
        var isActive = $item.hasClass("active");
        if (isActive) {
            $item.removeClass("active");
        } else {
            $item.addClass("active");
        }
    });
    // Form submit validation
    $('#contactForm_view').on('submit', function (e) {
        e.preventDefault();

        let isValid = true;
        $('.error-message').hide();

        $('#contactForm_view input[type="text"], #contactForm_view textarea').each(function () {
            var value = $.trim($(this).val());
            var placeholder = ($(this).attr('placeholder') || '').toLowerCase();
            var errorField = $(this).closest('.col').find('.error-message');
            console.log(placeholder);
            if (value === '') {
                errorField.text('This field is required').show();
                isValid = false;
            } else if (placeholder.includes('email')) {
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(value)) {
                    errorField.text('Please enter a valid email address').show();
                    isValid = false;
                }
            }
        });

        if (!$('#agreeCheckbox').is(':checked')) {
            $('#agreeCheckbox').closest('.checkbox_div').find('.error-message')
                .text('You must agree before submitting').show();
            isValid = false;
        }

        if (isValid) {
            this.submit();
        }
    });

    // validation for all text/textarea inputs
    $('#contactForm_view input[type="text"], #contactForm_view textarea').on('input', function () {
        var value = $.trim($(this).val());
        var placeholder = ($(this).attr('placeholder') || '').toLowerCase();
        var errorField = $(this).closest('.col').find('.error-message');

        if (value === '') {
            errorField.text('This field is required').show();
        } else if (placeholder.includes('email')) {
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                errorField.text('Please enter a valid email address').show();
            } else {
                errorField.hide();
            }
        } else {
            errorField.hide();
        }
    });

    // validation for selects
    $('#contactForm_view select').on('change', function () {
        var value = $(this).val();
        var errorField = $(this).closest('.col').find('.error-message');
        if (value === '') {
            errorField.text('This field is required').show();
        } else {
            errorField.hide();
        }
    });

    // only numbers + live error
    $('#phoneInput').on('input', function () {
        this.value = this.value.replace(/\D/g, '');
        var errorField = $(this).closest('.col').find('.error-message');
        if (this.value === '') {
            errorField.text('This field is required').show();
        } else {
            errorField.hide();
        }
    });

    // Checkbox validation
    $('#agreeCheckbox').on('change', function () {
        var errorField = $(this).closest('.checkbox_div').find('.error-message');
        if ($(this).is(':checked')) {
            errorField.hide();
        } else {
            errorField.text('You must agree before submitting').show();
        }
    });

});

function initializeSwipers(selector) {
    document.querySelectorAll(selector).forEach((swiperContainer) => {
        new Swiper(swiperContainer, {
            slidesPerView: 'auto',
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            centeredSlides: true,
            effect: 'slide',
            speed: 500,
            pagination: {
                el: swiperContainer.querySelector('.swiper-pagination'),
                clickable: true,
            },

        });
    });
}


initializeSwipers('.team_swiper');
// reset all inputs in form
$(document).on('click', '.reset_filter', function (e) {
    e.preventDefault();
    let form = $('.form_search');
    form.find('input[type="text"]').val('');
    form.find('input[type="hidden"]').val('');
    form.find('input[type="radio"]').prop('checked', false);
    form.find('.option').removeClass('active');
    form.find('.group-options').each(function () {
        $(this).find('.option').first().addClass('active');
        $(this).find('input[type="radio"]').first().prop('checked', true);
    });
    console.log('--- Filter Values After Reset ---');
    form.find('input').each(function () {
        console.log($(this).attr('name') + ': ' + $(this).val());
    });
});

function addDotsEvery3DigitsRightToLeft(numStr) {
    return numStr.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}

function formatWithDotsAndEllipsis(numStr, maxLength) {
    let withDots = addDotsEvery3DigitsRightToLeft(numStr);
    return withDots.length > maxLength ? withDots.slice(0, maxLength) + '...' : withDots;
}

function getRawNumber(str) {
    return str.replace(/\D/g, '');
}

$('input[name="min_price"], input[name="max_price"]').on('input', function () {
    let rawValue = this.value.replace(/[^0-9]/g, '');
    let formatted = formatWithDotsAndEllipsis(rawValue, 9);
    this.value = formatted;
    let minRaw = getRawNumber($('input[name="min_price"]').val());
    let maxRaw = getRawNumber($('input[name="max_price"]').val());

    if (minRaw && maxRaw && Number(maxRaw) < Number(minRaw)) {
        $('#price-error').text('Max price must be greater than or equal to Min price').show();
    } else {
        $('#price-error').hide();
    }
});

$(document).on('click', '.contact_email button', function (e) {
    e.preventDefault();
    var form = $(this).closest('form');
    var emailInput = form.find('input[name="email"]');
    var errorMessage = form.find('.email_error');
    var email = emailInput.val().trim();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === '' || !emailRegex.test(email)) {
        errorMessage.show();
    } else {
        errorMessage.hide();
        form.submit();
    }
});
var swiper_expert_offplan = new Swiper('.swiper_expert_offplan', {
    slidesPerView: 'auto',

    effect: 'slide',
    speed: 500,


});
var swiper_expert = new Swiper('.swiper_expert', {
    slidesPerView: 4,

    effect: 'slide',
    speed: 500,
    navigation: {
        nextEl: '.swiper_expert .swiper-button-next',
        prevEl: '.swiper_expert .swiper-button-prev',
    },
    breakpoints: {
        1200: {
            slidesPerView: 4,
        },
        1199: {
            slidesPerView: 3,
        },
        600: {
            slidesPerView: 2,
        },
        0: {
            slidesPerView: 1,
        },
    }
});
var swiper_testimonials = new Swiper('.swiper_testimonials', {
    slidesPerView: 'auto',

    effect: 'slide',
    speed: 500,
    navigation: {
        nextEl: '.swiper_testimonials .swiper-button-next',
        prevEl: '.swiper_testimonials .swiper-button-prev',
    },

});
// All images (you can fetch dynamically too)


















