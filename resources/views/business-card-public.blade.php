<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $businessCard->name }} - Business Card</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white rounded-xl shadow-lg max-w-sm w-full overflow-hidden">

    <!-- 1️⃣ Company Logo Section -->
    <div class=" flex items-center justify-center p-4"
    style="background-image: url({{ asset('logo.jpg') }});
    height: 200px; background-size: cover;background-repeat: no-repeat">

    </div>

    <!-- 2️⃣ Name, Title, Company Name -->
    <div class="text-center p-4 border-b">
        <h1 class="text-2xl font-bold">{{ $businessCard->name }}</h1>
        <p class="text-gray-600">{{ $businessCard->job_title }}</p>
        <p class="text-gray-500">{{ $businessCard->company_name }}</p>
    </div>

    <!-- 3️⃣ Clickable Email and Phone -->
    <div class="text-center p-4 border-b space-y-2">
        <p>
            <span>📧</span>
            <a href="mailto:{{ $businessCard->email }}" class="text-blue-500 hover:underline">
                {{ $businessCard->email }}
            </a>
        </p>
        <p>
            <span>📞</span>
            <a href="tel:{{ $businessCard->phone }}" class="text-blue-500 hover:underline">
                {{ $businessCard->phone }}
            </a>
        </p>
    </div>

    <!-- 4️⃣ Contact Us Section -->
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
