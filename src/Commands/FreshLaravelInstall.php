<?php

namespace Itstudioat\FreshLaravel\Commands;

use Illuminate\Console\Command;

class FreshLaravelInstall extends Command
{
    protected $signature = 'fresh-laravel:install';
    protected $description = 'Installiere JS-Abhängigkeiten für fresh-laravel';

    public function handle()
    {
        /*
        $packageJsonPath = base_path('package.json');

        if (!file_exists($packageJsonPath)) {
            $this->error('package.json not found.');
            return;
        }

        $json = json_decode(file_get_contents($packageJsonPath), true);

        $json['dependencies']['@vitejs/plugin-vue'] = '^5.0.4';
        $json['dependencies']['filepond'] = '^4.31.1';
        $json['dependencies']['filepond-plugin-file-validate-type'] = '^1.2.9';
        $json['dependencies']['filepond-plugin-image-preview'] = '^4.6.12';
        $json['dependencies']['pinia'] = '^2.1.7';
        $json['dependencies']['puppeteer'] = '^23.4.0';
        $json['dependencies']['sass-embedded'] = '^1.83.4';
        $json['dependencies']['shiki'] = '^3.3.0';
        $json['dependencies']['vite-plugin-vuetify'] = '^3.3.0';
        $json['dependencies']['vue'] = '^3.3.0';
        $json['dependencies']['vue-filepond'] = '^3.3.0';
        $json['dependencies']['vue-router'] = '^3.3.0';
        $json['dependencies']['vuetify'] = '^3.3.0';


        $json['devDependencies']['@vitejs/plugin-vue'] = '^5.0.0';

        ksort($json['dependencies']);
        ksort($json['devDependencies']);

        file_put_contents($packageJsonPath, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        $this->info('Vue dependencies added to package.json. Run npm install to install them.');
        */
    }
}
