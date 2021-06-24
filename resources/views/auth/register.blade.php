<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="flex-shrink-0 flex items-center">
                <a href="/"><img src="/logo-1b.png" class="w-18 h-14" /></a>
            </div>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="">
                <x-jet-label for="rut" value="{{ __('Rut') }}" />
                <x-jet-input id="rut" class="block mt-1 w-full" type="text" name="rut" maxlength="9" :value="old('rut')"
                    required autofocus autocomplete="rut" />
                <span class="text-white">(Sin puntos, ni guión) Ejemplo: 123456789</span>
            </div>

            <div class="mt-4">
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                    required autofocus autocomplete="nombre" />
            </div>

            <div class="mt-4">
                <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
                <x-jet-input id="apellido" class="block mt-1 w-full" type="text" name="apellido"
                    :value="old('apellido')" required autofocus autocomplete="apellido" />
            </div>

            <div class="mt-4">
                <x-jet-label for="tipo_cuenta" value="{{ __('Seleccione uno o más roles') }}" />
                <select name="tipo_cuenta[]" id="tipo_cuenta" class="block mt-1 w-full h-20" multiple>
                    <option value="1">Organizador</option>
                    <option value="2">Representante</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="telefono" value="{{ __('Teléfono') }}" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="tel" pattern="[0-9]{9}" maxlength="9"
                    name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
                <span class="text-white">Ejemplo: 912345678</span>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya tienes cuenta?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
