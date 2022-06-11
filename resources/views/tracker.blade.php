<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bevétel/kiadás') }}
        </h1>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" id="app">

                    Bevételek/ kiadások:
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">

                                    <div>
                                        <a href="#ujtetel" class="btn btn-info">Új tétel</a>
                                    </div>
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
                                            <th>Tétel típusa</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <!--Table body-->
                                        <tbody>
                                        @forelse($expenses as $expense)
                                        @if($expense->booking_type == 'income')
                                            <tr class="table-success">
                                                <td>{{ $expense-> id }}</td>
                                                <td>{{ $expense-> description }}</td>
                                                <td>{{ $expense-> category_id }}</td>
                                                <td>{{ $expense-> amount}}</td>
                                                <td>{{ $expense-> currency  }}</td>
                                                <td>{{ $expense-> expense_date }}</td>
                                                <td>{{ $expense-> booking_type }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-warning">Módosítás</button>
                                                        <button class="btn btn-danger">Törlés</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                            <tr class="table-danger">
                                                <td>{{ $expense-> id }}</td>
                                                <td>{{ $expense-> description }}</td>
                                                <td>{{ $expense-> category_id }}</td>
                                                <td>-{{ $expense-> amount }}</td>
                                                <td>{{ $expense-> currency  }}</td>
                                                <td>{{ $expense-> expense_date }}</td>
                                                <td>{{ $expense-> booking_type }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-warning">Módosítás</button>
                                                        <button class="btn btn-danger">Törlés</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @empty
                                            <tr class="table-warning">
                                                <td colspan="8">
                                                    Nincsenek kiadásaid.
                                                </td>
                                            </tr>

                                        @endforelse
                                        </tbody>
                                    </table>
                                    <!--Table-->

                                </div>
                            </div>
                        </div>
                    </div>


                    <h1 id="ujtetel" class="container px-5 my-5 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Tétel felvétele') }}
                    </h1>
                    <div class="container px-5 my-5">

                        <form action="/tracker" method="POST" id="expenseForm" data-sb-form-api-token="API_TOKEN">
                        @csrf
                            <div class="form-floating mb-3">
                                <input required class="form-control" name="description" id="tetelNeve" type="text" placeholder="Tétel neve"
                                       data-sb-validations="required"/>
                                <label for="tetelNeve">Tétel neve</label>
                                <div class="invalid-feedback" data-sb-feedback="tetelNeve:required">Tétel név megadása
                                    kötelező!
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="osszeg" name="amount" type="text" placeholder="Összeg"
                                       data-sb-validations="required"/>
                                <label for="osszeg">Összeg</label>
                                <div class="invalid-feedback" data-sb-feedback="osszeg:required">Összeg megadása
                                    kötelező!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Pénznem</label>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" id="ft" type="radio" value="Ft" name="currency"
                                           data-sb-validations="required"/>
                                    <label class="form-check-label" for="ft">Ft</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" id="eur" type="radio" value="EUR" name="currency"
                                           data-sb-validations="required"/>
                                    <label class="form-check-label" for="eur">EUR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" id="usd" type="radio" value="USD" name="currency"
                                           data-sb-validations="required"/>
                                    <label class="form-check-label" for="usd">USD</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" id="try" type="radio" value="TRY" name="currency"
                                           data-sb-validations="required"/>
                                    <label class="form-check-label" for="try">TRY</label>
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="currency:required">Egy opció kiválasztása
                                    kötelező!.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <select required class="form-select" id="kategoria" name="category_id" aria-label="Kategória">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                <label for="kategoria">Kategória</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Tétel típusa</label>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" id="bevetel" type="radio" value="income" name="booking_type">
                                    <label class="form-check-label" for="bevetel">Bevétel</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" id="kiadas" type="radio" value="expense" name="booking_type">
                                    <label class="form-check-label" for="kiadas">Kiadás</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="datum" name="expense_date" type="date" placeholder="Dátum"
                                       data-sb-validations="required"/>
                                <label for="datum">Dátum</label>
                                <div class="invalid-feedback" data-sb-feedback="datum:required">Dátum megadása
                                    kötelező!
                                </div>
                            </div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">A tételt sikeresen felvetted!</div>

                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Valami hiba történt!</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-info btn-lg" type="submit">Mentés</button>
                            </div>
                        </form>
                    </div>
                    <hr>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>

