<?php

declare(strict_types=1);

function twoFer(string $name = 'you'): string
{
    return "One for $name, One for me \n";
}

print(twoFer('Alice'));
print(twoFer('Bob'));
print(twoFer(''));
