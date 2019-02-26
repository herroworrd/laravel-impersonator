<?php namespace GeneaLabs\LaravelImpersonator\Policies;

class Impersonation
{
    public function impersonation($user, $impersonator) : bool
    {
        return $user->canImpersonate
            ?? false;
    }
}
