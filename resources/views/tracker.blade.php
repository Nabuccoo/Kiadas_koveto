<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bevétel/kiadás') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" id="app">
                    <div class="rendered-form">
                        <div class="">
                            <h1 access="false" id="control-6631402">Tétel felvétele</h1></div>
                        <div class="formbuilder-text form-group field-text-1654772412475">
                            <label for="text-1654772412475" class="formbuilder-text-label">Tétel neve<span class="tooltip-element" tooltip="Írd be a tétel nevét">?</span></label>
                            <input type="text" class="form-control" name="text-1654772412475" access="false" id="text-1654772412475" title="Írd be a tétel nevét">
                        </div>
                        <div class="formbuilder-text form-group field-text-1654643350357">
                            <label for="text-1654643350357" class="formbuilder-text-label">Összeg<span class="tooltip-element" tooltip="Add meg, hogy mennyi volt a bevételed">?</span></label>
                            <input type="text" class="form-control" name="amount" access="false" maxlength="0" id="text-1654643350357" title="Add meg, hogy mennyi volt a bevételed">
                        </div>
                        <div class="formbuilder-radio-group form-group field-radio-group-1654643335766">
                            <label for="radio-group-1654643335766" class="formbuilder-radio-group-label">Pénznem<span class="tooltip-element" tooltip="Válaszd ki a pénznemet">?</span></label>
                            <div class="radio-group">
                                <div class="formbuilder-radio">
                                    <input name="booking_type" access="false" id="radio-group-1654643335766-0" value="option-1" type="radio">
                                    <label for="radio-group-1654643335766-0">Ft</label>
                                </div>
                                <div class="formbuilder-radio">
                                    <input name="radio-group-1654643335766" access="false" id="radio-group-1654643335766-1" value="option-2" type="radio" checked="checked">
                                    <label for="radio-group-1654643335766-1">EUR</label>
                                </div>
                                <div class="formbuilder-radio">
                                    <input name="radio-group-1654643335766" access="false" id="radio-group-1654643335766-2" value="option-3" type="radio">
                                    <label for="radio-group-1654643335766-2">USD</label>
                                </div>
                                <div class="formbuilder-radio">
                                    <input name="radio-group-1654643335766" access="false" id="radio-group-1654643335766-3" type="radio">
                                    <label for="radio-group-1654643335766-3">TRY</label>
                                </div>
                            </div>
                        </div>
                        <div class="formbuilder-select form-group field-select-1654643344773">
                            <label for="select-1654643344773" class="formbuilder-select-label">Kategória<span class="tooltip-element" tooltip="Válassz egy kategóriát">?</span></label>
                            <select class="form-control" name="select-1654643344773" id="select-1654643344773">
                                <option value="option-1" selected="true" id="select-1654643344773-0">Option 1</option>
                                <option value="option-2" id="select-1654643344773-1">Option 2</option>
                                <option value="option-3" id="select-1654643344773-2">Option 3</option>
                            </select>
                        </div>
                        <div class="formbuilder-radio-group form-group field-radio-group-1654774142760">
                            <label for="radio-group-1654774142760" class="formbuilder-radio-group-label">Tétel típusa<span class="tooltip-element" tooltip="Válaszd ki, hogy bevétel, vagy kiadást szeretnél rögzíteni">?</span></label>
                            <div class="radio-group">
                                <div class="formbuilder-radio">
                                    <input name="radio-group-1654774142760" access="false" id="radio-group-1654774142760-0" value="option-1" type="radio" checked="checked">
                                    <label for="radio-group-1654774142760-0">Bevétel</label>
                                </div>
                                <div class="formbuilder-radio">
                                    <input name="radio-group-1654774142760" access="false" id="radio-group-1654774142760-1" value="option-2" type="radio">
                                    <label for="radio-group-1654774142760-1">Kiadás</label>
                                </div>
                            </div>
                        </div>
                        <div class="formbuilder-date form-group field-date-1654643302445">
                            <label for="date-1654643302445" class="formbuilder-date-label">Dátum<span class="tooltip-element" tooltip="Írd be, hogy mikor keletkezett ez a bevételed">?</span></label>
                            <input type="date" class="form-control" name="date-1654643302445" access="false" value="2022-06-08" id="date-1654643302445" title="Írd be, hogy mikor keletkezett ez a bevételed">
                        </div>
                        <div class="formbuilder-button form-group field-button-1654643294638">
                            <button type="button" class="btn-danger btn" name="button-1654643294638" access="false" id="button-1654643294638">Törlés</button>
                        </div>
                        <div class="formbuilder-button form-group field-button-1654769162127">
                            <button type="button" class="btn-warning btn" name="button-1654769162127" access="false" id="button-1654769162127">Visszaállítás</button>
                        </div>
                        <div class="formbuilder-button form-group field-button-1654768927526">
                            <button type="submit" class="btn-success btn" name="button-1654768927526" access="false" id="button-1654768927526">Mentés</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

