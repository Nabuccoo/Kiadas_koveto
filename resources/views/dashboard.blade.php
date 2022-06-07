<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Üdvözöllek kedves XY,
                    <br>
                    <br>
                    az aktuális egyenleged:

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
                                            <th>Age</th>
                                        </tr>
                                        </thead>
                                        <!--Table head-->

                                        <!--Table body-->
                                        <tbody>
                                        <tr class="table-info">
                                            <th scope="row">1</th>
                                            <td>Kate</td>
                                            <td>Moss</td>
                                            <td>USA</td>
                                            <td>New York City</td>
                                            <td>Web Designer</td>
                                            <td>23</td>
                                        </tr>

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
                                            <th>Age</th>
                                        </tr>
                                        </thead>
                                        <!--Table head-->

                                        <!--Table body-->
                                        <tbody>
                                        <tr class="table-info">
                                            <th scope="row">1</th>
                                            <td>Kate</td>
                                            <td>Moss</td>
                                            <td>USA</td>
                                            <td>New York City</td>
                                            <td>Web Designer</td>
                                            <td>23</td>
                                        </tr>

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
