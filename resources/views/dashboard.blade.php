<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" id="app">
                    Üdvözöllek kedves {{ Auth::user()->name }},
                    <br>
                    <br>
                    <dashboard-sum :my_expenses='@json($my_expenses)' :my_incomes='@json($my_incomes)'></dashboard-sum>


                    <hr>
                    <br>
                    Bevételek a hónapban:
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">

                                    <!--Table-->
                                    <table class="table table-striped w-auto">

                                        <!--Table head-->
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tétel neve</th>
                                            <th>Kategória</th>
                                            <th>Összeg</th>
                                            <th>Pénznem</th>
                                            <th>Dátum</th>
                                        </tr>
                                        </thead>

                                        <!--Table body-->
                                        <tbody>
                                        @forelse($my_incomes as $income)

                                        <tr class="table-info">
                                            <th scope="row">{{ $income-> id }}</th>
                                            <td>{{ $income-> description }}</td>
                                            <td>{{ $income-> category_id }}</td>
                                            <td>{{ $income-> amount}}</td>
                                            <td>{{ $income-> currency  }}</td>
                                            <td>{{ $income-> updated_at }}</td>
                                        </tr>
                                        @empty
                                            <tr class="table-warning">
                                                <td colspan="6">
                                                    Nincenek kiadásaid.
                                                </td>
                                            </tr>

                                        @endforelse
                                        </tbody>
                                        <!--Table body-->
                                    </table>
                                    <!--Table-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    Kiadások a hónapban:
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">

                                    <!--Table-->
                                    <table class="table table-striped w-auto">

                                        <!--Table head-->
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tétel neve</th>
                                            <th>Kategória</th>
                                            <th>Összeg</th>
                                            <th>Pénznem</th>
                                            <th>Dátum</th>
                                        </tr>
                                        </thead>

                                        <!--Table body-->
                                        <tbody>
                                        @forelse($my_expenses as $expense)

                                                <tr class="table-info">
                                                    <td>{{ $expense-> id }}</td>
                                                    <td>{{ $expense-> description }}</td>
                                                    <td>{{ $expense-> category_id }}</td>
                                                    <td>{{ $expense-> amount}}</td>
                                                    <td>{{ $expense-> currency  }}</td>
                                                    <td>{{ $expense-> updated_at }}</td>
                                                </tr>
                                                @empty
                                                    <tr class="table-warning">
                                                        <td colspan="6">
                                                            Nincenek kiadásaid.
                                                        </td>
                                                    </tr>

                                        @endforelse
                                        </tbody>
                                        <!--Table body-->
                                    </table>
                                    <!--Table-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

