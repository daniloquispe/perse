<?php

namespace App\Filament\Resources\SocialLinksResource\Pages;

use App\Filament\Resources\SocialLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialLink extends CreateRecord
{
    protected static string $resource = SocialLinkResource::class;
}
