<?php
declare(strict_types=1);
interface Notifier { public function send(string $message): string; }
// TODO : deux implémentations et announce.
