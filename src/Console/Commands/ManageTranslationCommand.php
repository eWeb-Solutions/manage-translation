<?php

declare(strict_types=1);

namespace ewebsolutions\ManageTranslation\Console\Commands;

use Illuminate\Console\Command;

class ManageTranslationCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'manage-translation:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package manage-translation.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('ManageTranslation placeholder command executed.');

        return self::SUCCESS;
    }
}
