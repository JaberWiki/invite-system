<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invite Code') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                    @if (!auth()->user()->reachedInviteCodeRequestLimit())
                        <div>
                            <form action="{{ route('invites') }}" method="post">
                                @csrf
                                <x-button>
                                    {{ __('Generate Invite Code') }}
                                </x-button>
                            </form>
                        </div>
                    @endif
                    <div class="mt-8">
                        <div class="flex items-center justify-between mb-4 bg-blue-500 p-4 rounded">
                            <div class="flex-1">
                                <div class="text-sm leading-5 text-white font-bold">
                                    Invite Codes
                                </div>
                            </div>
                            <div class="flex-1 text-right">
                                <div class="text-sm leading-5 text-white font-bold">
                                    Created At
                                </div>
                            </div>
                        </div>
                        @foreach ($inviteCodes as $inviteCode)
                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                        @if ($inviteCode->approved())
                                            <span x-data
                                                x-on:click="window.navigator.clipboard.writeText($el.innerText)">
                                                <x-button class="mb-2 normal-case mr-2" title="Click to copy the code!">
                                                    {{ $inviteCode->code }}
                                                </x-button>
                                            </span>
                                            ({{ $inviteCode->quantity_used }}/{{ $inviteCode->quantity }} uses)
                                        @else
                                            <x-button class="mb-2 normal-case mr-2 bg-orange-600">
                                                Your request is pending.
                                            </x-button>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex-1 text-right">
                                    <div class="text-sm leading-5 text-gray-500">
                                        {{ $inviteCode->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
