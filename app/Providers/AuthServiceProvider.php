<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Firefighter;
use App\Models\Firetruck;
use App\Models\Incident;
use App\Models\IncidentLog;
use App\Models\Inventory;
use App\Models\Preplan;
use App\Models\Station;
use App\Models\User;
use App\Policies\FireFighterPolicy;
use App\Policies\IncidentLogPolicy;
use App\Policies\InventoryPolicy;
use App\Policies\PrePlanPolicy;
use App\Policies\RolePolicy;
use App\Policies\StationPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
       Role::class => RolePolicy::class,
       User::class => UserPolicy::class,
       Incident::class => StationPolicy::class,
       Station::class => StationPolicy::class,
       Firetruck::class => FireFighterPolicy::class,
       Firefighter::class => FireFighterPolicy::class,
       Preplan::class => PrePlanPolicy::class,
       Inventory::class => InventoryPolicy::class,
       IncidentLog::class => IncidentLogPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
