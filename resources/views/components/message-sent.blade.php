<div class="chat-message">
    <div class="flex items-end justify-end">
        <div class="flex flex-col items-end order-1 max-w-xs mx-2 space-y-2 text-xs">
            {{ auth()->user()->name }} says:
            <div>
                <span class="inline-block px-4 py-2 my-2 text-black rounded-lg rounded-br-none bg-emerald-500 ">{{ $content }}</span>
            </div>
        </div>
    </div>
</div>
