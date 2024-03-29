<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace Callcocam\FlImporter\Support;

use Generator;
use Iterator;

class ChunkIterator
{
    public function __construct(
        protected Iterator $iterator,
        protected int $chunkSize,
    ) {
    }

    public function get(): Generator
    {
        $chunk = [];

        for ($i = 0; $this->iterator->valid(); $i++) {
            $chunk[] = $this->iterator->current();

            $this->iterator->next();

            if (count($chunk) !== $this->chunkSize) {
                continue;
            }

            yield $chunk;

            $chunk = [];
        }

        if (count($chunk)) {
            yield $chunk;
        }
    }
}
