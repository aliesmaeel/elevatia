<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ELEVATIA  | @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/respo.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/aos.css?v={{ time() }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body>

    @yield('header')
    @yield('content')
    @yield('footer')
    <script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('js/app.js?v=0.8')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            let propertyTypes = @json(\App\Helpers\RealestateTypes::getSearchable());

            let propertyTypesArray = Object.entries(propertyTypes).map(([key, value]) => ({
                id: key,
                text: value
            }));

            // This array will hold all selected values
            let selectedPropertyTypes = [];

            $('#property_search').select2({
                data: propertyTypesArray,
                tags: true,
                multiple: true,
                placeholder: "Enter keyword",
                allowClear: true,
                width: '100%'
            }).on('select2:select', function(e) {
                // Add selected value to array if not already in
                let value = e.params.data.text;
                if (!selectedPropertyTypes.includes(value)) {
                    selectedPropertyTypes.push(value);
                }
                console.log("Selected types:", selectedPropertyTypes);
            }).on('select2:unselect', function(e) {
                // Remove deselected value from array
                let value = e.params.data.text;
                selectedPropertyTypes = selectedPropertyTypes.filter(v => v !== value);
                console.log("Selected types:", selectedPropertyTypes);
            });

            // Optional: Before form submit, store array in hidden inputs
            $('.form_search').on('submit', function() {
                // Clear existing hidden inputs
                $('input[name="property_type[]"]').remove();


                selectedPropertyTypes.forEach(function(val) {
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'property_type[]',
                        value: val
                    }).appendTo('.form_search');
                });
            });
        });
    </script>




</body>

</html>
