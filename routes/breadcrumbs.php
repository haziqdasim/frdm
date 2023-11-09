<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Laman Utama', route('dashboard'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard'));
});

// Home > Dashboard > User Management
Breadcrumbs::for('user-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('User Management', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users
Breadcrumbs::for('user-management.users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Users', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users > [User]
Breadcrumbs::for('user-management.users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user-management.users.index');
    $trail->push(ucwords($user->name), route('user-management.users.show', $user));
});

// Home > Dashboard > User Management > Roles
Breadcrumbs::for('user-management.roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Roles', route('user-management.roles.index'));
});

// Home > Dashboard > User Management > Roles > [Role]
Breadcrumbs::for('user-management.roles.show', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('user-management.roles.index');
    $trail->push(ucwords($role->name), route('user-management.roles.show', $role));
});

// Home > Dashboard > User Management > Permission
Breadcrumbs::for('user-management.permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Permissions', route('user-management.permissions.index'));
});

// Home > Dashboard
Breadcrumbs::for('pengurusan-prapelan.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Pengurusan Prapelan', route('pengurusan-prapelan.index'));
});


// maklumat insiden
Breadcrumbs::for('insiden.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Maklumat Insiden', route('insiden.index'));
});

// lori bomba
Breadcrumbs::for('lori-bomba.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Lori Bomba', route('lori-bomba.index'));
});

// Inventori
Breadcrumbs::for('inventory.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Inventori', route('inventory.index'));
});

// pengurusan anggota
Breadcrumbs::for('pengurusan-anggota.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Pengurusan Anggota', route('pengurusan-anggota.index'));
});

// log masa
Breadcrumbs::for('log-masa.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Log Masa', route('log-masa.index'));
});

// laporan
Breadcrumbs::for('laporan.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Laporan', route('laporan.index'));
});

// balai bomba
Breadcrumbs::for('balai-bomba.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Balai Bomba', route('balai-bomba.index'));
});


