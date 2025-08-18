<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $businessCard->name }} - Business Card</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body{
            height: 700px;
        }



        /* Tablet / desktop */
        @media (min-width: 200px) and (max-width: 700px) {
            .business-card {
                width: 80%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                margin: auto;
            }


        }

        /* Large screens >1500px */
        @media (min-width: 710px) and (max-width: 1500px) {
            .business-card {
                width: 40%; /* example */
                height: 500px;
                margin:auto ;
            }
        }






    </style>

</head>
<body class="bg-gray-100 flex items-center justify-center ">
<div class="bg-white rounded-xl shadow-lg overflow-hidden business-card">

    <!-- logo -->
    <div class="flex items-center justify-center h-40 sm:h-48 bg-cover bg-center"
         style="background-image: url({{ asset('logo.jpg') }});">
    </div>

    <!-- name, title, company -->
    <div class="text-center p-4 border-b">
        <h1 class="text-xl sm:text-2xl font-bold">{{ $businessCard->name }}</h1>
        <p class="text-gray-600">{{ $businessCard->job_title }}</p>
        <p class="text-gray-500">{{ $businessCard->company_name }}</p>
    </div>

    <!-- email & phone -->
    <div class="text-center p-4 border-b space-y-2">
        <p>
            📧 <a href="mailto:{{ $businessCard->email }}" class="text-blue-500 hover:underline">{{ $businessCard->email }}</a>
        </p>
        <p>
            📞 <a href="tel:{{ $businessCard->phone }}" class="text-blue-500 hover:underline">{{ $businessCard->phone }}</a>
        </p>
    </div>

    <!-- contact & vcard -->
    <div class="text-center p-4 space-y-2">
        <p>Email: {{ $businessCard->email }}</p>
        <p>Phone: {{ $businessCard->phone }}</p>
        <p>Website: <a href="{{ $businessCard->url }}" class="text-blue-500 hover:underline" target="_blank">{{ $businessCard->url }}</a></p>
        <a href="{{ route('business-card.vcard', $businessCard->id) }}"
           class="mt-2 bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 inline-block">
            Add to Contacts
        </a>
    </div>
</div>

</body>
</html>
