<?php

namespace App\Services\Interfaces;

use App\DTOs\UserDTO;
use App\Models\Destination;

interface DestinationServiceInterface
{
    public function store(DestinationDTO $data);
    public function edit(DestinationDTO $data);
    public function destroy(DestinationDTO $data);

}
