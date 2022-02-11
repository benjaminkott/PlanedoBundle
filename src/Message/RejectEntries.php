<?php

declare(strict_types=1);

/*
 * This file is part of the package crell/planedo-bundle.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Crell\Bundle\Planedo\Message;

final class RejectEntries
{
    /** @var string[] */
    public array $entryIds;

    public function __construct(
        string ...$entryIds,
    ) {
        $this->entryIds = $entryIds;
    }
}
