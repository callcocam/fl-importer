<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace Callcocam\FlImporter\Actions;

use Callcocam\FlImporter\Concerns\CanImportRecords;
use Filament\Actions\Action;

class ImportAction extends Action
{
    use CanImportRecords;
}