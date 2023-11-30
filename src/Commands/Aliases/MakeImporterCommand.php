<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace Callcocam\FlImporter\Commands\Aliases;

use Callcocam\FlImporter\Commands\MakeImporterCommand as CommandsMakeImporterCommand;
use Filament\Actions\Commands;

class MakeImporterCommand extends CommandsMakeImporterCommand
{
    protected $hidden = true;

    protected $signature = 'filament:importer {name?} {--G|generate} {--F|force}';
}
