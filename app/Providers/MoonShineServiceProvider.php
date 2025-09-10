<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\StageResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\PartnerResource;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\GeograpyResource;
use App\MoonShine\Resources\ParametrResource;

use App\MoonShine\Resources\AdvantageResource;
use App\MoonShine\Resources\MoonShineUserResource;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use App\MoonShine\Resources\VacancyResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\MetalStructuresResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                MenuResource::class,
                ContactResource::class,
                PageResource::class,
                AdvantageResource::class,
                StageResource::class,
                GeograpyResource::class,
                PartnerResource::class,
                SeoDataResource::class,
                ParametrResource::class,
                VacancyResource::class,
                ServiceResource::class,
                ProductResource::class,
                MetalStructuresResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
