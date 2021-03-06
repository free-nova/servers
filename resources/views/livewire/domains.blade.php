<div>

    <div class="grid grid-cols-2 gap-4 mb-5">
        <div>
            Per Page: &nbsp;
            <select wire:model="perPage" class="appearance-none bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option>25</option>
                <option>50</option>
                <option>75</option>
            </select>
        </div>
        <div class="flex justify-end">
            <input class="appearance-none bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model="search" placeholder="Search...">
        </div>
    </div>

    <div>
        <div class="flex flex-col">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-top inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Server
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Expires
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($domains as $d)
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $d->name }}</div>
                                    <div class="text-sm leading-5 text-gray-500">{{ $d->domain }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $d->server->name }}</div>
                                    <div class="text-sm leading-5 text-gray-500 hover:text-purple-700"><a href="{{ $d->server->link }}" target="_blank">{{ $d->server->ip }}</a></div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    @if($d->expires)
                                        {{ $d->expires->format('m-d-Y') }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        <!-- More rows... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 mt-5">
        <div>
            {{ $domains->links() }}
        </div>
    </div>

</div>
