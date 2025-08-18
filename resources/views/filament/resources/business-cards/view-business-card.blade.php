<style>
.card-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 50px auto;
    height: fit-content;
    justify-content: space-between;
}
</style>

<x-filament::page>
    <div class="card-container">
        <h2 class="text-2xl font-bold">{{ $record->name }}</h2>
        <p class="text-gray-600 m-2">{{ $record->job_title }} - {{ $record->company_name }}</p>
        <p class="mt-2">📧 {{ $record->email }}</p>
        <p>📞 {{ $record->phone }}</p>
        <p>📍 {{ $record->address }}</p>
        <p>🔗 <a href="{{ $record->url }}" class="text-blue-500">{{ $record->url }}</a></p>

        <div>
            {!! QrCode::size(150)->generate(route('business-card.show', $record->id)) !!}
        </div>
        <a href="{{ route('business-card.qr.download', $record->id) }}"
           style="background-color: gray; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-top: 10px;">
            Download QR Code
        </a>


    </div>
</x-filament::page>


