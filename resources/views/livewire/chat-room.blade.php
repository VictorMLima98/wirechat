
<div class="flex flex-col justify-between flex-1 h-screen p:2 sm:p-6">
    <div id="messages"
        class="flex flex-col p-3 overflow-y-auto scrolling-touch scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2">

        @forelse($allMessages as $message)
            @switch($message->user->id)
                @case(auth()->id())
                    <x-message-sent :content="$message->content" />
                    @break

                @default
                <x-message-received :user="$message->user" :content="$message->content" />
            @endswitch
        @empty
        No message yet. Send the first!
        @endforelse
    </div>
    <div class="px-4 pt-4 mb-2 sm:mb-0">
        @error('currentMessage.content')
            <span class="w-full text-xs text-red-600">Please type a message!</span>
        @enderror
        <div class="relative flex flex-wrap">
            <input type="text" placeholder="Type here..." wire:model="currentMessage.content" required
                class="w-full px-4 py-3 text-gray-600 placeholder-gray-600 bg-gray-200 rounded-sm focus:outline-none focus:placeholder-gray-400">
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button type="button" wire:click="send"
                    class="inline-flex items-center justify-center px-4 py-3 text-white transition duration-500 ease-in-out bg-blue-500 hover:bg-blue-400 focus:outline-none">
                    <span class="font-bold">Send</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-6 h-6 ml-2 transform rotate-90">
                        <path
                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
