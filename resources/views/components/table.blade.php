@props(['striped' => false])

<div {{ $attributes->merge(['class' => 'min-w-full bg-white shadow rounded-lg overflow-hidden']) }}>
    <table class="min-w-full">
        <thead class="bg-blue-600 text-white">
            <tr>
                {{ $header }}
            </tr>
        </thead>
        <tbody>
            {{ $body }}
        </tbody>
    </table>
</div> 