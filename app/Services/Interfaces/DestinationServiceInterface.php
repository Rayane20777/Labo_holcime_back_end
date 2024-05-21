<?php

namespace App\Services\Interfaces;

use App\DTOs\DestinationDTO;

interface DestinationServiceInterface
{
    public function all();
    public function store(DestinationDTO $data);
    public function edit($data, int );
    public function destroy(int $id);
    public function restore(int $id);