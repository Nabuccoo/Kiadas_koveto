<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bevétel/kiadás') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($expenses as $expense)
                    {{$expense-> amount}}
                    @endforeach
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                   Új tétel felvétele
                </div>

                <div class="p-6 bg-white border-b border-gray-200">

                </div>

                <form class="p-5" action="{{ route('tracker.store') }}" method="POST">
                    @csrf

                    Prioritás
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="todo_priority" id="todo_prio_1" value="1" checked>
                        <label class="form-check-label" for="todo_prio_1">1</label>
                    </div>
                    @for($i = 2; $i < 6; $i++)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="todo_priority" id="todo_prio_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="todo_prio_{{ $i }}">{{ $i }}</label>
                        </div>
                    @endfor
                    <div>
                        <label class="form-label mt-2" for="todo_select">Kategória</label>
                        <select id="todo_select" class="form-control" name="todo_group_id">
                            <option value="0">Egyéni</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="form-label mt-2" for="todo_textarea">Leírás</label>
                    <textarea rows="3" id="todo_textarea" class="form-control" name="todo_description"></textarea>
                    <input class="btn btn-primary mt-2" type="submit" value="Létrehozás">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
