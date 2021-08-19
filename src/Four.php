<?php

interface Humanoid
{
    public function work(): void;

    public function eat(): void;
}

class HumanHumanoid implements Humanoid
{
    public function work(): void
    {
        // ....working
    }

    public function eat(): void
    {
        // ...... eating in lunch break
    }
}

class UndeadHumanoid implements Humanoid
{
    public function work(): void
    {
        //.... working much more
    }

    public function eat(): void
    {
        //.... robot can't eat, but it must implement this method
    }
}