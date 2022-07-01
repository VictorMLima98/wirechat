<div class="chat-message">
    <div class="flex items-end">
        <div class="flex flex-col items-start order-2 max-w-xs mx-2 space-y-2 text-xs">
            {{ $user->name }} says:
            <div><span class="inline-block px-4 py-2 my-2 text-gray-600 bg-gray-200 rounded-lg rounded-bl-none">{{ $content }}</span></div>
        </div>
    </div>
</div>
