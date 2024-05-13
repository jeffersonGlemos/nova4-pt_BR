<?php

namespace JeffersonGLemos\NovaPtBRLocalization;

use Illuminate\Support\ServiceProvider;

class NovaPtBRLocalizationServiceProvider extends ServiceProvider
{
    /**
     * Publica arquivos de tradução
     *
     * @return  void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/pt_BR.json' => $this->app->langPath("/vendor/nova/pt_BR.json"),
            __DIR__ . '/pt_BR' => $this->app->langPath("/vendor/nova/pt_BR")
        ], 'nova-pt-br-localization');
    }
}
