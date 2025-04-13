<?php

namespace Itstudioat\FreshLaravel\Commands;

use Illuminate\Console\Command;

class FreshLaravelInstall extends Command
{
    protected $signature = 'fresh-laravel:install';
    protected $description = 'Installiere JS-Abhängigkeiten für fresh-laravel';

    public function handle()
    {
        $this->info('🔧 Installing JS dependencies from fresh-laravel package…');

        $appPackageJsonPath = base_path('package.json');
        $packagePackageJsonPath = __DIR__ . '/../../../package.json';

        if (!file_exists($appPackageJsonPath)) {
            $this->error('🚫 package.json in Laravel-App nicht gefunden.');
            return 1;
        }

        $appPackage = json_decode(file_get_contents($appPackageJsonPath), true);
        $packagePackage = json_decode(file_get_contents($packagePackageJsonPath), true);

        $merged = false;

        foreach (['dependencies', 'devDependencies'] as $type) {
            if (!isset($packagePackage[$type])) continue;

            foreach ($packagePackage[$type] as $pkg => $version) {
                if (!isset($appPackage[$type][$pkg])) {
                    $appPackage[$type][$pkg] = $version;
                    $this->line("➕ $pkg ($type) hinzugefügt");
                    $merged = true;
                }
            }
        }

        if ($merged) {
            file_put_contents($appPackageJsonPath, json_encode($appPackage, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $this->info('✅ package.json aktualisiert.');

            if ($this->confirm('📦 npm install jetzt ausführen?', true)) {
                shell_exec('npm install');
                $this->info('📦 npm install ausgeführt.');
            } else {
                $this->warn('⚠️ npm install nicht ausgeführt. Bitte manuell ausführen.');
            }
        } else {
            $this->info('✔️ Alle Abhängigkeiten waren bereits vorhanden.');
        }

        return 0;
    }
}
