<?php

namespace Mannum\ZeroDowntimeEventReplays;

interface ZeroDowntimeProjector
{
    public function forReplay(): self;

    public function useConnection(string $connection): self;

    public function promoteConnectionToProduction(): void;

    public function removeConnection();
}
