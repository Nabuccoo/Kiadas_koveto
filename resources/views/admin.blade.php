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

                    Felhasználó felvétele/ módosítása:
                    <div class="container px-5 my-5">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="felhasznalonev" type="text" placeholder="Felhasználónév" data-sb-validations="required" />
                                <label for="felhasznalonev">Felhasználónév</label>
                                <div class="invalid-feedback" data-sb-feedback="felhasznalonev:required">Felhasználónév is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="vezeteknev" type="text" placeholder="Vezetéknév" data-sb-validations="required" />
                                <label for="vezeteknev">Vezetéknév</label>
                                <div class="invalid-feedback" data-sb-feedback="vezeteknev:required">Vezetéknév is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="keresztnev" type="text" placeholder="Keresztnév" data-sb-validations="required" />
                                <label for="keresztnev">Keresztnév</label>
                                <div class="invalid-feedback" data-sb-feedback="keresztnev:required">Keresztnév is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="eMailCim" type="email" placeholder="E-mail cím" data-sb-validations="required,email" />
                                <label for="eMailCim">E-mail cím</label>
                                <div class="invalid-feedback" data-sb-feedback="eMailCim:required">E-mail cím is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="eMailCim:email">E-mail cím Email is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="jelszo" type="text" placeholder="Jelszó" data-sb-validations="required" />
                                <label for="jelszo">Jelszó</label>
                                <div class="invalid-feedback" data-sb-feedback="jelszo:required">Jelszó is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="jogosultsag" aria-label="Jogosultság">
                                    <option value="Felhasználó">Felhasználó</option>
                                    <option value="Adminisztrátor">Adminisztrátor</option>
                                </select>
                                <label for="jogosultsag">Jogosultság</label>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

                    <hr>
                    <br>
                    Felhasználók:
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
                                            <th>Felhasználónév</th>
                                            <th>Vezetéknév</th>
                                            <th>Keresztnév</th>
                                            <th>E-mail cím</th>
                                            <th>Jelszó</th>
                                            <th>Jogosultság</th>
                                            <th>Létrehozva</th>
                                            <th>Módosítva</th>
                                        </tr>
                                        </thead>

                                        <!--Table body-->
                                        <tbody>


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

                    Kategória felvételel/ módosítása
                    <div class="container px-5 my-5">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="kategoriaNeve" type="text" placeholder="Kategória neve" data-sb-validations="required" />
                                <label for="kategoriaNeve">Kategória neve</label>
                                <div class="invalid-feedback" data-sb-feedback="kategoriaNeve:required">Kategória neve is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Státusz</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="aktiv" type="radio" name="statusz" data-sb-validations="required" />
                                    <label class="form-check-label" for="aktiv">Aktív</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="inaktiv" type="radio" name="statusz" data-sb-validations="required" />
                                    <label class="form-check-label" for="inaktiv">Inaktív</label>
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="statusz:required">One option is required.</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                    <hr>
                    Kategóriák
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
                                            <th>Kategória neve</th>
                                            <th>Státusza</th>
                                            <th>Létrehozva</th>
                                            <th>Módosítva</th>

                                        </tr>
                                        </thead>

                                        <!--Table body-->
                                        <tbody>


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

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
