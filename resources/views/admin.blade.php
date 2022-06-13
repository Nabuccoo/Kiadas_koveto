<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adminisztrációs oldal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" id="app">
                    <h1 class="container px-5 my-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Felhasználók:') }}
                    </h1>
                    <div class="py-10">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">

                                    <div>
                                        <a href="#ujfelhasznalo" class="btn btn-info">Új felhasználó</a>
                                    </div>
                                    <!--Table-->
                                    <table class="table table-striped w-auto">

                                        <!--Table head-->
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Felhasználónév</th>
                                            <th>Vezetéknév</th>
                                            <th>Keresztnév</th>
                                            <th>E-mail cím</th>
                                            <th>Jogosultság</th>
                                            <th>Módosítva</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <!--Table body-->
                                        <tbody>
                                        @forelse($users as $user)
                                            <tr class="table-info">
                                                <th scope="row">{{ $user -> id }}</th>
                                                <td>{{ $user -> name }}</td>
                                                <td>{{ $user -> last_name }}</td>
                                                <td>{{ $user -> first_name }}</td>
                                                <td>{{ $user -> email }}</td>
                                                <td>{{ $user -> user_role }}</td>
                                                <td>{{ $user -> updated_at }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <form action="/admin/user_delete/{{ $user->id }}" method="POST">
                                                            @csrf
                                                            <button class="btn btn-danger">Törlés</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="table-warning">
                                                <td colspan="6">
                                                    Nincsenek regisztrált felhasználók.
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


                    <h1 id="ujfelhasznalo" class="container px-5 my-5 font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Felhasználó felvétele/ módosítása:') }}
                    </h1>
                    <div class="container px-5 my-5">

                        <form action="/admin/new_user" method="POST" id="userForm" data-sb-form-api-token="API_TOKEN">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="hidden" name="last_id" value="{{$last_id+1}}" required>
                                <input class="form-control" name = "name" id="felhasznalonev" type="text" placeholder="Felhasználónév" data-sb-validations="required" required />
                                <label for="felhasznalonev">Felhasználónév</label>
                                <div class="invalid-feedback" data-sb-feedback="felhasznalonev:required">Felhasználónév megadása
                                    kötelező!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="last_name" id="vezeteknev" type="text" placeholder="Vezetéknév" data-sb-validations="required" required/>
                                <label for="vezeteknev">Vezetéknév</label>
                                <div class="invalid-feedback" data-sb-feedback="vezeteknev:required">Vezetéknév megadása
                                    kötelező!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="first_name" id="keresztnev" type="text" placeholder="Keresztnév" data-sb-validations="required" required/>
                                <label for="keresztnev">Keresztnév</label>
                                <div class="invalid-feedback" data-sb-feedback="keresztnev:required">Keresztnév megadása
                                    kötelező!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="eMailCim" type="email" placeholder="E-mail cím" data-sb-validations="required,email" required/>
                                <label for="eMailCim">E-mail cím</label>
                                <div class="invalid-feedback" data-sb-feedback="eMailCim:required">E-mail cím megadása
                                    kötelező!</div>
                                <div class="invalid-feedback" data-sb-feedback="eMailCim:email">E-mail cím nem érvényes!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="jelszo" type="text" placeholder="Jelszó" data-sb-validations="required" required/>
                                <label for="jelszo">Jelszó</label>
                                <div class="invalid-feedback" data-sb-feedback="jelszo:required">Jelszó megadása
                                    kötelező!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="user_role" id="jogosultsag" aria-label="Jogosultság" required>
                                    <option value="user">Felhasználó</option>
                                    <option value="admin">Adminisztrátor</option>
                                </select>
                                <label for="jogosultsag">Jogosultság</label>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">A felhasználót sikeresen rögzítetted!</div>

                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Valami hiba történt!</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Mentés</button>
                            </div>

                        </form>
                    </div>


                    <hr>

                    <h1 class="container px-5 my-5 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Kategóriák:') }}
                    </h1>
                    <div class="py-8">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-4 bg-white border-b border-gray-200">

                                    <!--Table-->
                                    <table class="table table-striped w-auto">

                                        <div>
                                            <a href="#ujkategoria" class="btn btn-info">Új kategória</a>
                                        </div>
                                        <!--Table head-->
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kategória neve</th>
                                            <th>Státusza</th>
                                            <th>Létrehozva</th>
                                            <th>Módosítva</th>

                                        </tr>
                                        </thead>

                                        <!--Table body-->
                                        <tbody>
                                        @forelse($categories as $category)

                                            <tr class="table-info">
                                                <th scope="row">{{ $category-> id }}</th>
                                                <td>{{ $category-> category_name }}</td>
                                                <td>{{ $category-> active }}</td>
                                                <td>{{ $category-> created_at}}</td>
                                                <td>{{ $category-> updated_at }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <form action="/admin/category_delete/{{ $category->id }}" method="POST">
                                                            @csrf
                                                            <button class="btn btn-danger">Törlés</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="table-warning">
                                                <td colspan="6">
                                                    Nincsenek felvett kategóriák.
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

                    <h1 id="ujkategoria" class="container px-5 my-5 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Kategória felvétele/ módosítása:') }}
                    </h1>
                    <div class="container px-5 my-5">

                        <form action="/admin/category" method="POST" id="categoryForm" data-sb-form-api-token="API_TOKEN">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="kategoriaNeve" name="category_name" type="text" placeholder="Kategória neve" data-sb-validations="required" required />
                                <label for="kategoriaNeve">Kategória neve</label>
                                <div class="invalid-feedback" data-sb-feedback="kategoriaNeve:required">Kategória név megadása
                                    kötelező!</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Státusz</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="aktiv" checked type="radio" value="1" name="active" data-sb-validations="required" required/>
                                    <label class="form-check-label" for="aktiv">Aktív</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="inaktiv" type="radio" value="0" name="active" data-sb-validations="required" required />
                                    <label class="form-check-label" for="inaktiv">Inaktív</label>
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="statusz:required">Egy opció kiválasztása kötelező!</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">A kategóriát sikeresen rögzítetted!</div>

                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Valami hiba történt!</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Mentés</button>
                            </div>


                        </form>
                    </div>

                    <hr>


                    <br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
